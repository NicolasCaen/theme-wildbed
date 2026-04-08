# Instructions de Migration : Mise à jour des Slugs d'Espacement (Gutenberg)

## 1. Objectif du projet
Nous avons refondu le système d'espacement de notre thème WordPress dans le fichier `theme.json`. Les anciens slugs numériques simples (ex: `5`, `10`, `h-2`) ont été remplacés par des slugs explicites basés sur les valeurs en pixels ou les plages de fluidité (ex: `32-40`, `56-200`, `h-16`).

**La mission :** Analyser les fichiers PHP de patterns et remplacer toutes les occurrences des anciens slugs par les nouveaux dans le balisage des blocs WordPress.

## 2. Tables de Correspondance (Mapping)

### ESPACEMENTS STANDARDS
| Ancien Slug | Nouveau Slug | Valeur Réelle |
| :--- | :--- | :--- |
| `"1-2"` | `"4"` | 4px |
| `"1"` | `"8"` | 8px |
| `"1-5"` | `"12"` | 12px |
| `"2"` | `"16"` | 16px |
| `"3"` | `"24"` | 24px |
| `"4"` | `"32"` | 32px |
| `"5"` | `"32-40"` | 32px → 40px (Fluid) |
| `"6"` | `"32-48"` | 32px → 48px (Fluid) |
| `"7"` | `"32-72"` | 32px → 72px (Fluid) |
| `"8"` | `"56-120"` | 56px → 120px (Fluid) |
| `"9"` | `"56-160"` | 56px → 160px (Fluid) |
| `"10"` | `"56-200"` | 56px → 200px (Fluid) |

### ESPACEMENTS VARIANTES "H"
| Ancien Slug | Nouveau Slug | Valeur Réelle |
| :--- | :--- | :--- |
| `"h-1-2"` | `"h-4"` | 4px |
| `"h-1"` | `"h-8"` | 8px |
| `"h-1-5"` | `"h-12"` | 12px |
| `"h-2"` | `"h-16"` | 16px |
| `"h-3"` | `"h-24"` | 24px |
| `"h-4"` | `"h-32"` | 32px |
| `"h-5"` | `"h-16-40"` | 16px → 40px (Fluid) |
| `"h-6"` | `"h-16-48"` | 16px → 48px (Fluid) |
| `"h-7"` | `"h-16-72"` | 16px → 72px (Fluid) |
| `"h-8"` | `"h-16-120"` | 16px → 120px (Fluid) |
| `"h-9"` | `"h-16-160"` | 16px → 160px (Fluid) |
| `"h-10"` | `"h-16-200"` | 16px → 200px (Fluid) |

## 3. Zones d'intervention (Regex / Logique)

L'IA doit effectuer des remplacements dans deux formats spécifiques au sein des fichiers de patterns :

### A. Dans le nom des variables CSCS
Chercher les clés --wp--preset--spacing--XXX dans le nom des variables CSS.
* **Exemple ancien :** `--wp--preset--spacing--5`
* **Exemple nouveau :** `--wp--preset--spacing--32-40`

### B. Dans les classes CSS (Attribut "className" ou balise HTML)
Chercher les patterns de classes générées par WordPress : `has-[SLUG]-margin`, `has-[SLUG]-padding`, `has-[SLUG]-gap`.
* **Exemple ancien :** `class="has-5-margin-top has-h-10-padding-bottom"`
* **Exemple nouveau :** `class="has-32-40-margin-top has-h-16-200-padding-bottom"`

## 4. Instructions de sécurité
1.  **Strict Match :** Ne remplacer que si le slug correspond exactement (ne pas remplacer `"1"` à l'intérieur de `"10"` par exemple).
2.  **Contexte :** Ne pas modifier les slugs de déclaration des patterns en haut de fichier (ex: `Slug: ng1-base/mon-pattern`).
3.  **Préservation du code :** Ne pas modifier les balises PHP ou le reste du balisage HTML.