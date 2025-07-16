# Évaluation pratique : gestion d’un registre d’emprunts avec PDO

## Contexte

Vous êtes chargé de développer une mini-application PHP utilisant PDO pour gérer un registre d’emprunts de matériel par des employés. Cette application doit permettre d’ajouter un emprunt et d’afficher les emprunts déjà enregistrés.

---

## Structure du projet à respecter (dossier `emprunts`)

```md
emprunts/
├── config/
└── db.inc.php (à modifier)
├── data/
└── save.sql (contient la structure et données SQL, ne doit pas être modifié)
└── requests/
└── store.php (à modifier)
├── add.php (à modifier)
├── index.php (à modifier)
├── README.md (à modifier)
```

## Consignes

### 1. Base de données

- Importez le fichier SQL `data/save.sql` dans votre serveur MySQL pour créer la base et la table.
- Ce fichier contient la structure de la base `pdo_emprunts` et une table `emprunts` avec quelques enregistrements.
- **Vous ne devez pas modifier ce fichier.**

### 2. Fichier de configuration `config/db.inc.php`

- Paramétrez ce fichier pour initialiser une connexion PDO vers la base `pdo_emprunts`.
- La connexion doit utiliser les bonnes pratiques : gestion des erreurs avec exceptions, encodage UTF-8.

### 3. Formulaire d’ajout `add.php`

- Modifiez cette page pour y définir un formulaire permettant de saisir :
  - Nom de l’employé (champ texte, requis)
  - Matériel emprunté (champ texte, requis)
  - Date d’emprunt (champ date, requis)
  - Commentaire (textarea, optionnel)
- Le formulaire doit envoyer les données en POST vers `requests/store.php`.
- Cette page affichera les 3 derniers emprunts effectués.

### 4. Traitement du formulaire `requests/store.php`

- Ce script doit :
  - Vérifier que la requête est bien en POST.
  - Récupérer et valider les données reçues (les 3 premiers champs sont obligatoires).
  - Insérer les données dans la table `emprunts` avec une requête préparée PDO.
  - Rediriger ou proposer un lien pour revenir à la liste des emprunts (`index.php`).

### 5. Affichage des emprunts `index.php`

- Modifier la page affichant tous les emprunts enregistrés, triés par date d’emprunt décroissante.
- Affichez dans un tableau HTML les colonnes :
  - Nom de l’employé
  - Matériel emprunté
  - Date d’emprunt (format français JJ/MM/AAAA)
  - Commentaire (afficher "-" si vide)
- Proposez un lien vers la page d’ajout `add.php`.

### 6. Fichier README.md

- Rédigez un fichier expliquant :
  - Comment importer la base via `save.sql`.
  - Comment configurer la connexion PDO dans `db.inc.php`.
  - Présentation rapide des fichiers et leur rôle.
  - Instructions pour lancer l’application localement.

---

## Respect des consignes

- Assurer la sécurité globale de votre application (XSS et Injection SQL).
- Manipuler PDO avec requêtes préparées pour sécuriser les insertions.
- Créer un formulaire HTML en assurant la récupération des données propres en PHP.

---

## Remarques

- Ne modifiez pas le fichier `save.sql`.
- Respectez bien la structure de fichiers demandée.
- Envoyez votre travail via GitHub (ou archive ZIP si problemes techniques).
- Le code doit être clair, commenté, et fonctionnel.

---

Bonne chance !
