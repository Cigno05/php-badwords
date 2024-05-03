## Descrizione:
- Creare un form PHP che permetta di inviare due campi: un paragrafo ed una parola da censurare.
- Gestire il tutto con due file diversi.
    - Il primo file index.php dovrà permettere all’utente di inserire i dati e inviare la richiesta al server.
    - Il secondo file server.php riceverà la richiesta ed eseguirà queste operazioni:
        - stampare a schermo il paragrafo originale
        - stampare a schermo la sua lunghezza del paragrafo originale
        - stampare di nuovo il paragrafo dopo aver sostituito la parola inviata dall’utente con tre asterischi (***)
        - stampare la lunghezza del nuovo paragrafo
## BONUS:
stampate in pagina anche l numero totale di sostituzione che sono state fatte della parola inviata dall’utente
PS. dovete cercare nella documentazione del metodo str_replace