

char *maChaine = malloc(15 * sizeof(char)); /* Ici, on ne connaît pas la valeur des cases mémoires. La valeur de chacune des cases mémoires est totalement aléatoire. */
int i;

if (maChaine == NULL) { /* On vérifie que le système n'a pas renvoyé un pointeur nul. */
    puts("ERREUR : probleme de memoire.");
    exit(1);
}

for(i = 0; i < 15; i++)
    maChaine[i] = 0; /* On met chacune des cases à 0. */
/* suite du programme */

DIFFERENCE

char *maChaine = calloc(15, sizeof(char)); /* Ici, on sait que les 15 cases mémoires contiennent 0. */

if (maChaine == NULL) {
    puts("ERREUR : probleme de memoire !");
    exit(1);
}

/* suite du programme */
