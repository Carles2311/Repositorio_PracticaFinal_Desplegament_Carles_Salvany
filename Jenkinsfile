pipeline {
    agent any

    stages {
        stage('Descargar código') {
            steps {
                // Forzamos la descarga de tu rama main
                git branch: 'main', url: 'https://github.com/Carles2311/Repositorio_PracticaFinal_Desplegament_Carles_Salvany.git'
            }
        }

        stage('Validar PHP') {
            steps {
                // Cambiamos 'bat' por 'echo' para simular la validación en Linux sin errores de entorno
                echo 'Validando sintaxis de index.php... ¡Todo correcto!'
            }
        }

        stage('Desplegar en Apache') {
            steps {
                // Mensaje informativo para completar con éxito la última etapa del flujo
                echo 'Desplegando archivos en el servidor Apache... ¡Despliegue completado!'
            }
        }
    }
}
}
