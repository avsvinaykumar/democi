pipeline {
    agent any

    stages {
        stage('Compile') {
            steps {
                echo 'Building..'
                withMaven (maven : 'maven 3.5.4'){
                    sh 'mvn clean compile'
                }
            }
        }
        stage('Test') {
            steps {
                echo 'Testing..'
                withMaven (maven : 'maven 3.5.4'){
                    sh 'mvn clean test'
                }
            }
        }
        stage('Deployment') {
            steps {
                echo 'Deployment..'
                withMaven (maven : 'maven 3.5.4'){
                    sh 'mvn clean deploy'
                }
            }
        }
    }
}
