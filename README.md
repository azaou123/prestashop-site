# PrestaShop Site - Projet E-commerce (Master)

Ce dépôt contient l'infrastructure Docker pour un site **PrestaShop 8**, incluant la personnalisation du thème Hummingbird et l'intégration de modules spécifiques.

---

## 🛠 Prérequis
* **Docker** & **Docker Compose** installés.
* **Git** pour la gestion des sources.

---

## 🚀 Installation & Lancement

1. **Cloner le projet :**
   ```bash
   git clone [https://github.com/azauou123/prestashop-site.git](https://github.com/azauou123/prestashop-site.git)
   cd prestashop-site

    Démarrer les conteneurs :
    Bash

    docker-compose up -d

    Le site sera accessible après quelques instants le temps de l'initialisation.

    Installer le module d'expiration (Partie 2.4) :
    Bash

    cd prestashop_data/modules
    git clone [https://github.com/azauou123/ps-module-expiry-date.git](https://github.com/azauou123/ps-module-expiry-date.git)

    Ensuite, activez le module via le Back-Office.

🌐 Accès aux interfaces
Interface	URL	Identifiants (par défaut)
Front-Office (FO)	http://localhost:8085	Client de test
Back-Office (BO)	http://localhost:8085/admin	demo@prestashop.com / prestashop_demo
🎨 Personnalisations (Partie 2.2)

Le projet utilise Hummingbird comme thème parent.

    Thème Enfant : Modifications CSS et surcharge des fichiers .tpl.

    Fiche Produit : Ajout d'un bloc "Info livraison" statique sur le Front-Office.

📦 Commandes utiles

    Démarrer : docker-compose up -d

    Arrêter : docker-compose stop

    Voir les logs : docker-compose logs -f prestashop

    Accéder au shell : docker exec -it presta_app bash

    Nettoyer (tout supprimer) : docker-compose down -v

📁 Structure du Repo

    /prestashop_data : Persistance des fichiers PrestaShop (Thèmes, Modules, Images).

    docker-compose.yml : Configuration de l'infrastructure (Apache/PHP + MySQL 8.0).

    .gitignore : Exclusion des fichiers temporaires et logs.