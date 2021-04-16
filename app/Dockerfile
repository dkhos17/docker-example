FROM python:3-onbuild

RUN pip3 install flask
RUN pip3 install flask_restful

RUN pip3 install psycopg2-binary
RUN pip3 install psycopg2

COPY . /usr/src/app

CMD ["python3", "api.py"]