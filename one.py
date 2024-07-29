import pandas as pd
from flask import Flask, request, render_template
from sklearn.model_selection import train_test_split, GridSearchCV
from sklearn.preprocessing import OneHotEncoder
from sklearn.compose import ColumnTransformer
from sklearn.pipeline import Pipeline
from sklearn.linear_model import LogisticRegression

# Load the dataset
file_path = "C:\\Users\\srini\\Downloads\\mental_health_finaldata_with_depression_levels.csv"
data = pd.read_csv(file_path)

# Define the feature columns and the target column
feature_columns = data.columns[:-1]
target_column = 'depression_level'

# Separate features and target
X = data[feature_columns]
y = data[target_column]

# One-hot encode categorical variables
categorical_features = feature_columns
preprocessor = ColumnTransformer(
    transformers=[
        ('cat', OneHotEncoder(handle_unknown='ignore'), categorical_features)
    ])

# Split the data into training and testing sets
X_train, X_test, y_train, y_test = train_test_split(X, y, test_size=0.2, random_state=42)

# Create a pipeline with preprocessing and logistic regression
pipeline = Pipeline(steps=[('preprocessor', preprocessor),
                           ('classifier', LogisticRegression(max_iter=1000))])

# Define hyperparameters to tune
param_grid = {
    'classifier__C': [0.01, 0.1, 1, 10, 100],
    'classifier__solver': ['liblinear', 'lbfgs']
}

# Perform grid search with cross-validation
grid_search = GridSearchCV(pipeline, param_grid, cv=5, scoring='accuracy')
grid_search.fit(X_train, y_train)

# Train the final model with the best parameters
final_model = grid_search.best_estimator_

app = Flask(__name__)

def preprocess_user_input(user_input):
    """
    Preprocess user input to match training data format.
    """
    processed_input = {k: v.strip().title() for k, v in user_input.items()}
    return processed_input

def predict_depression_level(user_input):
    """
    Predict the depression level based on user input.
    
    Parameters:
    - user_input (dict): A dictionary containing user input for all feature columns.
    
    Returns:
    - str: Predicted depression level.
    """
    input_df = pd.DataFrame([user_input])
    prediction = final_model.predict(input_df)
    return prediction[0]

@app.route('/', methods=['GET', 'POST'])
def index():
    if request.method == 'POST':
        user_input = {
            'Age': request.form['Age'],
            'Gender': request.form['Gender'],
            'Occupation': request.form['Occupation'],
            'Days_Indoors': request.form['Days_Indoors'],
            'Growing_Stress': request.form['Growing_Stress'],
            'Quarantine_Frustrations': request.form['Quarantine_Frustrations'],
            'Changes_Habits': request.form['Changes_Habits'],
            'Mental_Health_History': request.form['Mental_Health_History'],
            'Weight_Change': request.form['Weight_Change'],
            'Mood_Swings': request.form['Mood_Swings'],
            'Coping_Struggles': request.form['Coping_Struggles'],
            'Work_Interest': request.form['Work_Interest'],
            'Social_Weakness': request.form['Social_Weakness']
        }
        user_input = preprocess_user_input(user_input)
        prediction = predict_depression_level(user_input)
        return render_template('result.html', prediction=prediction)
    return render_template('index.html')

if __name__ == '__main__':
    app.run(debug=True, port=9100)
