[LIVE DEMO]: https://xhash-api.herokuapp.com/api/zip-codes/85200
[technical assessment]: https://jobs.backbonesystems.io/challenge-fullstack.pdf
[Zip Code DB]: https://www.correosdemexico.gob.mx/SSLServicios/ConsultaCP/CodigoPostal_Exportar.aspx

<p align="center">
    <a href="https://www.backbonesystems.io/" target="_blank">
        <img src="https://www.backbonesystems.io/png/logo.png" width="400" alt="BackBone Logo">
    </a>
</p>

</br>

<h3 align="center"><em><strong>Backend Developer Laravel - Technical Assessment</strong></em></h3>

# About

This is a [technical assessment] developed in Laravel framework. It's an API that retrieves Mexican Zip Codes information.

#### Here you can find a **[LIVE DEMO]**

# Procedure

Stack and Steps Followed.

## Stack

- Laravel
- MYSQL
- Python
- Heroku
- AWS -> RDS
- AWS -> EC2

## Steps

1.  Downloading DB from [Zip Code DB].
2.  Desiginig optimal ER Diagram.

<p align="center">
    <img src="https://github.com/JuanPRubio/xhash-laravel/blob/master/public/ER%20Diagram.JPG?raw=true"
         alt="ERD" width="350" height="300">
  </a>
</p>

3.  Procesing it with **Python** to achieve SQL uploadable files. The .py file iterates .txt and creates the files.
    > Python was the choice because of it's practicality and easiness processing and writing files.
4.  Configuring Docker with api, nginx and db.
5.  Creating Laravel proyect.
6.  Making Models and it's relevants files such as controllers, migrations, etc.
7.  Configuring database structure.
8.  Configuring Model connections.
9.  Running Seeders with `.py` generated files.
10. Writing ZipCode controller including error hanling.
11. Configuring routes in `api.php`.
12. Testing local proyect.
13. Creating Heroku App.
14. Creating AWS RDS MySQL database.
15. Configuring EC2 to enable Heroku connection.
16. Uploading Laravel proyect to Heroku.
17. Uploading database to AWS RDS.
18. Testing online proyect.

