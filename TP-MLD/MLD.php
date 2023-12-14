<?php
// -> commande 1,N ( 1 user pour N order)
USER(id, email, password, firstname, lastname, birthdate,address,complements, postal_code, city, #id_order )

//->contient, 1,N (1 order pour N order_line)
ORDER(id, reference, date, #order_line_id)

// -> contient, 1,N (1 order_line pour N product)
ORDER_LINE(id, quantity, price, #product_id)

// -> fait partie de, N,N (N product pour N categorie)
// -> est representé par, 1,N (1 product, N picture)
PRODUCT(id, name, description, price, #picture_id, #category_id)

PICTURE(id, src, alt)

CATEGORY(id, nom)