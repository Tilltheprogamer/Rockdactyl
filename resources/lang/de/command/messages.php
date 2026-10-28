<?php

return [
    'location' => [
        'no_location_found' => 'Kein Eintrag mit diesem Kurzcode gefunden.',
        'ask_short' => 'Standort-Kurzcode',
        'ask_long' => 'Standortbeschreibung',
        'created' => 'Neuer Standort :name mit der ID :id erstellt.',
        'deleted' => 'Der angeforderte Standort wurde gelöscht.',
    ],
    'user' => [
        'search_users' => 'Benutzernamen, Benutzer-ID oder E-Mail-Adresse eingeben',
        'select_search_user' => 'ID des zu löschenden Benutzers (0 für eine neue Suche)',
        'deleted' => 'Benutzer aus dem Panel gelöscht.',
        'confirm_delete' => 'Möchtest du diesen Benutzer wirklich aus dem Panel löschen?',
        'no_users_found' => 'Für diesen Suchbegriff wurden keine Benutzer gefunden.',
        'multiple_found' => 'Mehrere passende Konten gefunden. Wegen des Parameters --no-interaction kann kein Benutzer gelöscht werden.',
        'ask_admin' => 'Ist dieser Benutzer Administrator?',
        'ask_email' => 'E-Mail-Adresse',
        'ask_username' => 'Benutzername',
        'ask_name_first' => 'Vorname',
        'ask_name_last' => 'Nachname',
        'ask_password' => 'Passwort',
        'ask_password_tip' => 'Um ein Konto mit einem zufälligen, per E-Mail zugesandten Passwort zu erstellen, brich mit STRG+C ab und starte den Befehl mit --no-password erneut.',
        'ask_password_help' => 'Passwörter müssen mindestens 8 Zeichen lang sein und mindestens einen Großbuchstaben sowie eine Zahl enthalten.',
        '2fa_help_text' => [
            'Dieser Befehl deaktiviert die Zwei-Faktor-Authentifizierung eines Benutzerkontos. Verwende ihn nur zur Kontowiederherstellung, wenn der Benutzer ausgesperrt ist.',
            'Wenn du das nicht möchtest, drücke STRG+C, um abzubrechen.',
        ],
        '2fa_disabled' => 'Die Zwei-Faktor-Authentifizierung wurde für :email deaktiviert.',
    ],
    'schedule' => [
        'output_line' => 'Auftrag für die erste Aufgabe in :schedule (:hash) wird gestartet.',
    ],
    'maintenance' => [
        'deleting_service_backup' => 'Dienst-Backupdatei :file wird gelöscht.',
    ],
    'server' => [
        'rebuild_failed' => 'Neuerstellung von „:name“ (#:id) auf Node „:node“ fehlgeschlagen: :message',
        'reinstall' => [
            'failed' => 'Neuinstallation von „:name“ (#:id) auf Node „:node“ fehlgeschlagen: :message',
            'confirm' => 'Du bist dabei, mehrere Server neu zu installieren. Fortfahren?',
        ],
        'power' => [
            'confirm' => 'Du bist dabei, die Aktion :action für :count Server auszuführen. Fortfahren?',
            'action_failed' => 'Energieaktion für „:name“ (#:id) auf Node „:node“ fehlgeschlagen: :message',
        ],
    ],
    'environment' => [
        'mail' => [
            'ask_smtp_host' => 'SMTP-Host (z. B. smtp.gmail.com)',
            'ask_smtp_port' => 'SMTP-Port',
            'ask_smtp_username' => 'SMTP-Benutzername',
            'ask_smtp_password' => 'SMTP-Passwort',
            'ask_mailgun_domain' => 'Mailgun-Domain',
            'ask_mailgun_endpoint' => 'Mailgun-Endpunkt',
            'ask_mailgun_secret' => 'Mailgun-Geheimnis',
            'ask_mandrill_secret' => 'Mandrill-Geheimnis',
            'ask_postmark_username' => 'Postmark-API-Schlüssel',
            'ask_driver' => 'Welcher Treiber soll zum E-Mail-Versand verwendet werden?',
            'ask_mail_from' => 'Absender-E-Mail-Adresse',
            'ask_mail_name' => 'Angezeigter Absendername',
            'ask_encryption' => 'Zu verwendende Verschlüsselungsmethode',
        ],
    ],
];
