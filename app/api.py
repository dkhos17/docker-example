from flask import Flask
from flask_restful import Resource, Api

class AboutAPI(Resource):
    def get(self):
        return {
            'ret' : ['/getFirstName, /getLastName, /getUni, /getCourse, /getGPA']
        }

class FirstName(Resource):
    def get(self):
        return {
            'ret' : ['Devi']
        }

class LastName(Resource):
    def get(self):
        return {
            'ret' : ['Khositashvili']
        }

class Uni(Resource):
    def get(self):
        return {
            'ret' : ['Free University of Tbilisi']
        }

class Course(Resource):
    def get(self):
        return {
            'ret' : ['Math and Computer Science - MACS']
        }

class GPA(Resource):
    def get(self):
        return {
            'ret' : ['3.63 / 4.0']
        }


if __name__ == '__main__':
    APP = Flask(__name__)
    API = Api(APP)
    API.add_resource(AboutAPI, '/')
    API.add_resource(FirstName, '/getFirstName')
    API.add_resource(LastName, '/getLastName')
    API.add_resource(Uni, '/getUni')
    API.add_resource(Course, '/getCourse')
    API.add_resource(GPA, '/getGPA')
    APP.run(host='0.0.0.0', port=80, debug=True)


   
