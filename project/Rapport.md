# Rapport mi-parcours (18/10/2023) - Projet Microservices M2

## Description du projet

Le projet consiste en la création d'une application web basée sur une architecture microservices. L'objectif principal est de mettre en place une application Full Stack avec une API en backend développée en Laravel, utilisant une base de données MySQL. Cette dernière sera utilisée via un frontend développé en React, qui agira comme un back-office pour la gestion des données. L'ensemble de l'infrastructure sera conteneurisée à l'aide de Docker.

## Choix technologiques

*Backend:*

**Laravel:** J'ai choisi Laravel en raison de sa robustesse en tant que framework PHP pour la construction d'APIs RESTful.

**MySQL:** Pour la base de données, j'ai opté pour MySQL en raison de sa fiabilité, de sa compatibilité avec Laravel, et de sa capacité à gérer efficacement les données structurées.

*Frontend:*

**React:** J'utilise React pour développer l'interface utilisateur, car c'est un outil idéal pour développer un tableau de bord et il offre une expérience utilisateur fluide ainsi que des fonctionnalités interactives.

*Conteneurisation:*

**Docker:** Docker sera utilisé pour encapsuler l'ensemble de l'application, garantissant une portabilité et une gestion des ressources aisée.

*Gestion des Conteneurs:*

**Portainer.io:** J'ai choisi Portainer.io pour la gestion des conteneurs, offrant une interface utilisateur conviviale pour superviser et gérer les conteneurs Docker.

*Reverse Proxy:*

**Nginx:** Nginx sera utilisé en tant que reverse proxy pour acheminer le trafic HTTP vers les différents services, offrant une sécurité accrue et une distribution équilibrée de la charge.

*Sécurité:*

**SSL et HTTPS:** Je sécuriserai l'application en implémentant SSL et HTTPS pour sécuriser la communication entre l'application et les utilisateurs.

*Déploiement:*

**Azure** (Optionnel): Si le temps le permet, j'envisage de déployer l'application sur la plateforme Azure pour bénéficier de l'infrastructure cloud robuste qu'elle offre.

## Architectures et composants

Je schématiserai l'architecture de mon projet à l'aide d'outils de modélisation, indiquant les différents composants et services de l'application, ainsi que les liens entre eux. 

Les ports exposés seront clairement identifiés tant du côté client que du côté backend, et les protocoles et les requêtes typiques (POST, GET, etc.) sont spécifiés en format JSON.

## Progression actuelle

À ce stade du projet, j'ai réussi à mettre en place l'API backend Laravel avec la base de données MySQL et le frontend React a également été développé avec succès. Les conteneurs Docker ont été configurés pour ces services, facilitant ainsi leur déploiement et leur gestion. La prochaine étape consistera à configurer Nginx en tant que reverse proxy pour l'application.

## Prochaines étapes

Les prochaines étapes de notre projet incluent la configuration de Nginx en tant que reverse proxy, l'implémentation de la sécurité SSL/HTTPS, et la mise en place de Portainer.io pour la gestion des conteneurs. Si le temps le permet, je tenterai un déploiement sur Azure.

Puis je terminerai de documenter le projet de manière détaillée, en fournissant des informations sur les endpoints, les requêtes, les ports exposés, et en ajoutant des commentaires à notre code.

Le rapport complet du projet, y compris l'architecture détaillée, sera disponible dans le fichier README.md du dépôt Git.