<?php

return [
    'notices' => [
        'created' => 'Das Nest :name wurde erfolgreich erstellt.',
        'deleted' => 'Das ausgewählte Nest wurde aus dem Panel gelöscht.',
        'updated' => 'Die Nest-Konfiguration wurde aktualisiert.',
    ],
    'eggs' => [
        'notices' => [
            'imported' => 'Das Egg und seine Variablen wurden importiert.',
            'updated_via_import' => 'Das Egg wurde mithilfe der bereitgestellten Datei aktualisiert.',
            'deleted' => 'Das ausgewählte Egg wurde aus dem Panel gelöscht.',
            'updated' => 'Die Egg-Konfiguration wurde aktualisiert.',
            'script_updated' => 'Das Installationsscript des Eggs wurde aktualisiert und wird bei jeder Serverinstallation ausgeführt.',
            'egg_created' => 'Das neue Egg wurde erstellt. Starte laufende Daemons neu, damit das Egg übernommen wird.',
        ],
    ],
    'variables' => [
        'notices' => [
            'variable_deleted' => 'Die Variable „:variable“ wurde gelöscht und steht nach dem erneuten Erstellen der Server nicht mehr zur Verfügung.',
            'variable_updated' => 'Die Variable „:variable“ wurde aktualisiert. Server, die sie verwenden, müssen neu erstellt werden, um die Änderung zu übernehmen.',
            'variable_created' => 'Eine neue Variable wurde erstellt und diesem Egg zugeordnet.',
        ],
    ],
];
