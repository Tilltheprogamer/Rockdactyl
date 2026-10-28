<?php

return [
    'validation' => [
        'fqdn_not_resolvable' => 'Der angegebene FQDN oder die IP-Adresse lässt sich nicht in eine gültige IP-Adresse auflösen.',
        'fqdn_required_for_ssl' => 'Für SSL ist ein vollständiger Domainname erforderlich, der auf eine öffentliche IP-Adresse verweist.',
    ],
    'notices' => [
        'allocations_added' => 'Die Allocations wurden diesem Node hinzugefügt.',
        'node_deleted' => 'Der Node wurde aus dem Panel entfernt.',
        'location_required' => 'Du musst mindestens einen Standort konfigurieren, bevor du einen Node hinzufügen kannst.',
        'node_created' => 'Der Node wurde erstellt. Du kannst den Daemon dieser Maschine auf der Registerkarte „Konfiguration“ automatisch einrichten. Vor dem Hinzufügen von Servern musst du mindestens eine IP-Adresse und einen Port zuweisen.',
        'node_updated' => 'Die Node-Informationen wurden aktualisiert. Nach Änderungen an Daemon-Einstellungen ist ein Neustart erforderlich.',
        'unallocated_deleted' => 'Alle nicht zugewiesenen Ports für <code>:ip</code> wurden gelöscht.',
    ],
];
