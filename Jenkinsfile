pipeline {
    agent any

    stages {

        stage('Descargar código') {
            steps {
                git branch: 'main', url:'https://github.com/Carles2311/Repositorio_PracticaFinal_Desplegament_Carles_Salvany.git'
            }
        }

        stage('Validar PHP') {
            steps {
                bat 'php -l index.php'
            }
        }

        stage('Desplegar en Apache') {
            steps {
                bat 'xcopy /E /Y * C:\\xampp\\htdocs\\cv_site\\'
            }
        }
    }
}
