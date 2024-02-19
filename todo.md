# Todo

## Ajax

- Utiliser throw Exception
- Revoir le SQL ?

## Database

- Propriété ENUM pour ADMIN/EMPLOYEE et avis APPROVED/REJECT/PENDING
- Nouvelle table marque/modèle dont la clé étrangère est incluses dans la table Vehicle ?

## Vehicle

- Paramètre `id` à renommer en `vehicle`

- Pagination
- Number format
- Erreur ajax : alerte popup

## Review

- [Masonry](https://getbootstrap.com/docs/5.0/examples/masonry/)

## Avis client

- Créer le insert

## Devis

- Popup de validation ?
- Envoyer un mail validation ?
- Envoyer un mail à une adresse commune `devis@ultra-motor.fr`

## Edition

- Type user ???
- Edition ou tableau de bord

- Insert review
- Approve or delete review (button)

- Update schedule (input field)

- Insert services (bouton add input)
- Update services (input field)

## Avis

- Ajouter le formulaire d'input
- Utiliser l'icon [Bootstrap](https://icons.getbootstrap.com/?q=star)

## Se connecter

- Supprimer le bouton d'accès

## Footer

- Mettre icone lien externe:

  - [Icon link docs](https://getbootstrap.com/docs/5.3/helpers/icon-link/#example)
  - [Icons docs](https://icons.getbootstrap.com/icons/box-arrow-up-right/)

## Toutes les pages

- Mettre à jour les boutons sizes
- Définir des couleurs
- Gap sur les grid ??????

- Renommer les variables
  - Variable title (onglet)
  - Variable $page pour les links
  - Variable description de page

- Rechercher les todo
- Cohérence des interfaces

## Publication Netlify

- Regarder si possible (attention BDD)

## Créer un user snippets

- Pour proposer la balise PHP
- Shortcut Upper ou Lower CASE

## Overflow pattern

### Case 1: easy

```html
<body class="d-flex flex-column">
    <header><header>
    <main class="flex-1 overflow-auto">
        Scrollable
    </main>
    <footer><footer>
</body>
```

### Case 2: medium

```html
<body class="d-flex flex-column">
    <header><header>
    <main class="flex-1 d-flex flex-column overflow-hidden">
        <div>
            <h1>Title</h1>
            <button>Create</button>
        </div>
        <div class="flex-1 overflow-auto">
            Scrollable
        </div>
    </main>
    <footer><footer>
</body>
```
