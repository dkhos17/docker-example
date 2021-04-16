import psycopg2
from psycopg2 import Error

class DB():
    def data(self):
        try:
            connection = psycopg2.connect(host="172.17.208.1",database="postgres",user="postgres", password="postgres")

            cursor = connection.cursor()
            print("PostgreSQL server information")
            print(connection.get_dsn_parameters(), "\n")

            cursor.execute("SELECT version();")

            record = cursor.fetchone()
            print("You are connected to - ", record, "\n")

            accounts = '''SELECT * from students'''
            cursor.execute(accounts)
            return cursor.fetchall()

        except (Exception, Error) as error:
            print("Error while connecting to PostgreSQL", error)
        finally:
            if (connection):
                cursor.close()
                connection.close()
                print("PostgreSQL connection is closed")

print(DB().data())