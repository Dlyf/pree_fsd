# Liste des informations (date, heure, immatriculation, marque, modèle, nom et prénom de l'expert) des véhicules à expertiser, à trier par date et heure croissantes
SELECT ve.date, ve.heure, ve.immatriculation, ve.marque, ve.modele, ex.nom, ex.prenom FROM vehicules_expertise ve JOIN experts ex ON ve.experts_id = ex.experts_id ORDER BY ve.date, ve.heure ASC;

# Supprimer des entrées
DELETE experts FROM experts where experts_id=1;


