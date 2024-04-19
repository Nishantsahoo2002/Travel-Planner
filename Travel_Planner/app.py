from flask import Flask, request, render_template
import pickle

placesdata = pickle.load(open('C:\\xampp\\htdocs\\touristvenues\\Travel_Planner\\places_dict.pkl','rb'))
similarity = pickle.load(open('C:\\xampp\htdocs\\touristvenues\\Travel_Planner\\similarity.pkl','rb'))

def recommend(place):
    try:
        place_index = placesdata[placesdata['PLACE_NAME'].str.contains(place, case=False)].index[0]
        distances = similarity[place_index]
        places_list = sorted(list(enumerate(distances)),reverse=True,key=lambda x:x[1])[0:9]
    except:
        places_list=[]

    place_names=[]
    place_id=[]
    for i in places_list:
        place_names.append(placesdata.iloc[i[0]].PLACE_NAME)
        place_id.append(placesdata.iloc[i[0]].PLACE_ID)
        # print(placesdata.iloc[i[0]].PLACE_ID,placesdata.iloc[i[0]].PLACE_NAME)
    return place_names,place_id
# recommend('SAPUA DAM')

app = Flask(__name__)


@app.route('/')
def index():
    return render_template("search.php",place_1_id="template",place_2_id="template",place_3_id="template",place_4_id="template",place_5_id="template",place_6_id="template",place_7_id="template",place_8_id="template",place_9_id="template")  # Serve the HTML file


@app.route("/recommend", methods=["POST"])
def process_data():
    # user_input = request.form.get("user_input")
    user_input = request.form["user_input"]
    if user_input:  # Check if user_input is not None
        namesdata,namesid=recommend(user_input.upper())
        if len(namesdata) > 0 and len(namesid) > 0:
            return render_template("search.php",place_1_id=namesid[0],place_1_name=namesdata[0],place_2_id=namesid[1],place_2_name=namesdata[1],place_3_id=namesid[2],place_3_name=namesdata[2],place_4_id=namesid[3],place_4_name=namesdata[3],place_5_id=namesid[4],place_5_name=namesdata[4],place_6_id=namesid[5],place_6_name=namesdata[5],place_7_id=namesid[6],place_7_name=namesdata[6],place_8_id=namesid[7],place_8_name=namesdata[7],place_9_id=namesid[8],place_9_name=namesdata[8])
        else:
             return render_template("search.php",place_1_id="template",place_2_id="template",place_3_id="template",place_4_id="template",place_5_id="template",place_6_id="template",place_7_id="template",place_8_id="template",place_9_id="template")
    else:
        return render_template("search.php",place_1_id="template",place_2_id="template",place_3_id="template",place_4_id="template",place_5_id="template",place_6_id="template",place_7_id="template",place_8_id="template",place_9_id="template")
    # Handle case where no input is provided (optional)
    


# if __name__ == "__main__":
app.run(debug=True)
