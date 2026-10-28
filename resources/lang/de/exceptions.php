<?php

return [
    'daemon_connection_failed' => 'Bei der Kommunikation mit dem Daemon ist ein Fehler aufgetreten (HTTP/:code). Dieser Fehler wurde protokolliert.',
    'node' => [
        'servers_attached' => 'Ein Node kann nur gelöscht werden, wenn ihm keine Server mehr zugewiesen sind.',
        'daemon_off_config_updated' => 'Die Daemon-Konfiguration wurde aktualisiert, aber die Konfigurationsdatei konnte nicht automatisch angepasst werden. Aktualisiere die Datei config.yml manuell, damit der Daemon die Änderungen übernimmt.',
    ],
    'allocations' => [
        'server_using' => 'Diese Allocation ist derzeit einem Server zugewiesen und kann erst nach dem Entfernen der Zuweisung gelöscht werden.',
        'too_many_ports' => 'Mehr als 1.000 Ports können nicht gleichzeitig als ein Bereich hinzugefügt werden.',
        'invalid_mapping' => 'Die Zuordnung für Port :port ist ungültig und konnte nicht verarbeitet werden.',
        'cidr_out_of_range' => 'Die CIDR-Schreibweise erlaubt nur Masken zwischen /25 und /32.',
        'port_out_of_range' => 'Allocations müssen Ports größer als 1024 und höchstens 65535 verwenden.',
    ],
    'nest' => [
        'delete_has_servers' => 'Ein Nest mit aktiven Servern kann nicht aus dem Panel gelöscht werden.',
        'egg' => [
            'delete_has_servers' => 'Ein Egg mit aktiven Servern kann nicht aus dem Panel gelöscht werden.',
            'invalid_copy_id' => 'Das ausgewählte Egg existiert nicht oder kopiert selbst ein Script.',
            'must_be_child' => 'Die Option „Einstellungen kopieren von“ muss auf ein untergeordnetes Egg des gewählten Nests verweisen.',
            'has_children' => 'Dieses Egg hat untergeordnete Eggs. Lösche sie zuerst.',
        ],
        'variables' => [
            'env_not_unique' => 'Die Umgebungsvariable :name muss innerhalb dieses Eggs eindeutig sein.',
            'reserved_name' => 'Der Variablenname :name ist reserviert und kann nicht verwendet werden.',
            'bad_validation_rule' => 'Die Validierungsregel „:rule“ ist für diese Anwendung nicht gültig.',
        ],
        'importer' => [
            'json_error' => 'Beim Lesen der JSON-Datei ist ein Fehler aufgetreten: :error.',
            'file_error' => 'Die angegebene JSON-Datei ist ungültig.',
            'invalid_json_provided' => 'Das Format der angegebenen JSON-Datei wird nicht erkannt.',
        ],
    ],
    'subusers' => [
        'editing_self' => 'Du darfst dein eigenes Unterbenutzerkonto nicht bearbeiten.',
        'user_is_owner' => 'Der Serverbesitzer kann nicht als Unterbenutzer hinzugefügt werden.',
        'subuser_exists' => 'Ein Benutzer mit dieser E-Mail-Adresse ist diesem Server bereits als Unterbenutzer zugewiesen.',
    ],
    'databases' => [
        'delete_has_databases' => 'Ein Datenbankhost mit aktiven Datenbanken kann nicht gelöscht werden.',
    ],
    'tasks' => [
        'chain_interval_too_long' => 'Das maximale Intervall für eine verkettete Aufgabe beträgt 15 Minuten.',
    ],
    'locations' => [
        'has_nodes' => 'Ein Standort mit aktiven Nodes kann nicht gelöscht werden.',
    ],
    'users' => [
        'node_revocation_failed' => 'Schlüssel für <a href=":link">Node #:node</a> konnten nicht widerrufen werden. :error',
    ],
    'deployment' => [
        'no_viable_nodes' => 'Es wurden keine Nodes gefunden, die die Anforderungen für eine automatische Bereitstellung erfüllen.',
        'no_viable_allocations' => 'Es wurden keine Allocations gefunden, die die Anforderungen für eine automatische Bereitstellung erfüllen.',
    ],
    'api' => [
        'resource_not_found' => 'Die angeforderte Ressource existiert auf diesem Server nicht.',
    ],
];
