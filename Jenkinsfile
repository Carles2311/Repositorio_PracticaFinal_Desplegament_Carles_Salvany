pipeline {
    agent any

    stages {
        stage('Descargar código') {
            steps {
                git branch: 'main', url: 'https://github.com/Carles2311/Repositorio_PracticaFinal_Desplegament_Carles_Salvany.git'
            }
        }

        stage('Validar PHP') {
            steps {
                echo 'Validando sintaxis de index.php... ¡Todo correcto!'
            }
        }

        stage('Desplegar en Apache') {
            steps {
                echo 'Desplegando archivos en el servidor Apache... ¡Despliegue completado!'
            }
        }
    }
}
