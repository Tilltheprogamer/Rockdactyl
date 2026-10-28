<?php

// Meldungen für das Aktivitätsprotokoll; Platzhalter müssen unverändert bleiben.
return [
    'auth' => [
        'fail' => 'Anmeldung fehlgeschlagen',
        'success' => 'Angemeldet',
        'password-reset' => 'Passwort zurückgesetzt',
        'reset-password' => 'Passwortzurücksetzung angefordert',
        'checkpoint' => 'Zwei-Faktor-Authentifizierung angefordert',
        'recovery-token' => 'Wiederherstellungscode für Zwei-Faktor-Authentifizierung verwendet',
        'token' => 'Zwei-Faktor-Prüfung abgeschlossen',
        'ip-blocked' => 'Anfrage von nicht zugelassener IP-Adresse für :identifier blockiert',
        'sftp' => [
            'fail' => 'SFTP-Anmeldung fehlgeschlagen',
        ],
    ],
    'user' => [
        'user' => [
            'create' => 'Neuen Benutzer :email erstellt',
        ],
        'account' => [
            'email-changed' => 'E-Mail-Adresse von :old zu :new geändert',
            'password-changed' => 'Passwort geändert',
        ],
        'api-key' => [
            'create' => 'Neuen API-Schlüssel :identifier erstellt',
            'delete' => 'API-Schlüssel :identifier gelöscht',
        ],
        'ssh-key' => [
            'create' => 'SSH-Schlüssel :fingerprint zum Konto hinzugefügt',
            'delete' => 'SSH-Schlüssel :fingerprint aus dem Konto entfernt',
        ],
        'two-factor' => [
            'create' => 'Zwei-Faktor-Authentifizierung aktiviert',
            'delete' => 'Zwei-Faktor-Authentifizierung deaktiviert',
        ],
    ],
    'server' => [
        'reinstall' => 'Server neu installiert',
        'console' => [
            'command' => 'Befehl „:command“ auf dem Server ausgeführt',
        ],
        'power' => [
            'start' => 'Server gestartet',
            'stop' => 'Server gestoppt',
            'restart' => 'Server neu gestartet',
            'kill' => 'Serverprozess zwangsweise beendet',
        ],
        'backup' => [
            'download' => 'Backup :name heruntergeladen',
            'delete' => 'Backup :name gelöscht',
            'restore' => 'Backup :name wiederhergestellt (gelöschte Dateien: :truncate)',
            'restore-complete' => 'Wiederherstellung von Backup :name abgeschlossen',
            'restore-failed' => 'Wiederherstellung von Backup :name fehlgeschlagen',
            'start' => 'Neues Backup :name gestartet',
            'complete' => 'Backup :name als abgeschlossen markiert',
            'fail' => 'Backup :name als fehlgeschlagen markiert',
            'lock' => 'Backup :name gesperrt',
            'unlock' => 'Backup :name entsperrt',
        ],
        'database' => [
            'create' => 'Neue Datenbank :name erstellt',
            'rotate-password' => 'Passwort für Datenbank :name erneuert',
            'delete' => 'Datenbank :name gelöscht',
        ],
        'file' => [
            'compress_one' => ':directory:files.0 komprimiert',
            'compress_other' => ':count Dateien in :directory komprimiert',
            'read' => 'Inhalt von :file angesehen',
            'copy' => 'Kopie von :file erstellt',
            'create-directory' => 'Verzeichnis :directory:name erstellt',
            'decompress' => ':files in :directory entpackt',
            'delete_one' => ':directory:files.0 gelöscht',
            'delete_other' => ':count Dateien in :directory gelöscht',
            'download' => ':file heruntergeladen',
            'pull' => 'Externe Datei von :url nach :directory heruntergeladen',
            'rename_one' => ':directory:files.0.from in :directory:files.0.to umbenannt',
            'rename_other' => ':count Dateien in :directory umbenannt',
            'write' => 'Inhalt von :file geändert',
            'upload' => 'Datei-Upload begonnen',
            'uploaded' => ':directory:file hochgeladen',
        ],
        'sftp' => [
            'denied' => 'SFTP-Zugriff wegen fehlender Berechtigungen blockiert',
            'create_one' => ':files.0 erstellt',
            'create_other' => ':count neue Dateien erstellt',
            'write_one' => 'Inhalt von :files.0 geändert',
            'write_other' => 'Inhalt von :count Dateien geändert',
            'delete_one' => ':files.0 gelöscht',
            'delete_other' => ':count Dateien gelöscht',
            'create-directory_one' => 'Verzeichnis :files.0 erstellt',
            'create-directory_other' => ':count Verzeichnisse erstellt',
            'rename_one' => ':files.0.from in :files.0.to umbenannt',
            'rename_other' => ':count Dateien umbenannt oder verschoben',
        ],
        'allocation' => [
            'create' => 'Allocation :allocation zum Server hinzugefügt',
            'notes' => 'Notizen für :allocation von „:old“ zu „:new“ geändert',
            'primary' => ':allocation als primäre Server-Allocation festgelegt',
            'delete' => 'Allocation :allocation gelöscht',
        ],
        'schedule' => [
            'create' => 'Zeitplan :name erstellt',
            'update' => 'Zeitplan :name aktualisiert',
            'execute' => 'Zeitplan :name manuell ausgeführt',
            'delete' => 'Zeitplan :name gelöscht',
        ],
        'task' => [
            'create' => 'Neue Aufgabe „:action“ für Zeitplan :name erstellt',
            'update' => 'Aufgabe „:action“ für Zeitplan :name aktualisiert',
            'delete' => 'Aufgabe aus Zeitplan :name gelöscht',
        ],
        'settings' => [
            'rename' => 'Server von :old in :new umbenannt',
            'description' => 'Serverbeschreibung von :old zu :new geändert',
        ],
        'startup' => [
            'edit' => 'Variable :variable von „:old“ zu „:new“ geändert',
            'image' => 'Docker-Image des Servers von :old zu :new geändert',
        ],
        'subuser' => [
            'create' => ':email als Unterbenutzer hinzugefügt',
            'update' => 'Berechtigungen des Unterbenutzers :email aktualisiert',
            'delete' => ':email als Unterbenutzer entfernt',
        ],
    ],
];
