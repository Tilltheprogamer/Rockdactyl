<?php

return [
    'email' => [
        'title' => 'E-Mail-Adresse ändern',
        'updated' => 'Deine E-Mail-Adresse wurde aktualisiert.',
    ],
    'password' => [
        'title' => 'Passwort ändern',
        'requirements' => 'Dein neues Passwort sollte mindestens 8 Zeichen lang sein.',
        'updated' => 'Dein Passwort wurde aktualisiert.',
    ],
    'two_factor' => [
        'button' => 'Zwei-Faktor-Authentifizierung einrichten',
        'disabled' => 'Die Zwei-Faktor-Authentifizierung wurde für dein Konto deaktiviert. Bei der Anmeldung wird kein zusätzlicher Code mehr angefordert.',
        'enabled' => 'Die Zwei-Faktor-Authentifizierung wurde aktiviert. Ab jetzt musst du dich bei der Anmeldung mit dem Code von deinem Gerät bestätigen.',
        'invalid' => 'Der eingegebene Code war ungültig.',
        'setup' => [
            'title' => 'Zwei-Faktor-Authentifizierung einrichten',
            'help' => 'Du kannst den Code nicht scannen? Gib den folgenden Schlüssel manuell in deiner App ein:',
            'field' => 'Code eingeben',
        ],
        'disable' => [
            'title' => 'Zwei-Faktor-Authentifizierung deaktivieren',
            'field' => 'Code eingeben',
        ],
    ],
];
