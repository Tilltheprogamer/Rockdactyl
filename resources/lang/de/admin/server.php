<?php

return [
    'exceptions' => [
        'no_new_default_allocation' => 'Du versuchst die Standard-Allocation des Servers zu löschen, ohne dass eine Ersatz-Allocation verfügbar ist.',
        'marked_as_failed' => 'Die vorherige Installation dieses Servers ist fehlgeschlagen. Sein Status kann in diesem Zustand nicht geändert werden.',
        'skipping_install_script' => 'Dieser Server überspringt das Installationsscript seines Eggs. Eine Neuinstallation ist erst möglich, wenn diese Einstellung deaktiviert wurde.',
        'bad_variable' => 'Die Variable :name konnte nicht validiert werden.',
        'daemon_exception' => 'Bei der Kommunikation mit dem Daemon ist ein Fehler aufgetreten (HTTP/:code). Der Fehler wurde protokolliert. (Anfrage-ID: :request_id)',
        'default_allocation_not_found' => 'Die angeforderte Standard-Allocation wurde in den Allocations dieses Servers nicht gefunden.',
    ],
    'alerts' => [
        'startup_changed' => 'Die Startkonfiguration des Servers wurde aktualisiert. Wenn das Nest oder Egg geändert wurde, beginnt jetzt eine Neuinstallation.',
        'server_deleted' => 'Der Server wurde aus dem System gelöscht.',
        'server_created' => 'Der Server wurde im Panel erstellt. Die vollständige Installation durch den Daemon kann einige Minuten dauern.',
        'build_updated' => 'Die Ressourceneinstellungen wurden aktualisiert. Einige Änderungen erfordern einen Neustart.',
        'suspension_toggled' => 'Der Sperrstatus des Servers wurde auf :status gesetzt.',
        'rebuild_on_boot' => 'Der Docker-Container dieses Servers wird beim nächsten Start neu erstellt.',
        'install_toggled' => 'Der Installationsstatus des Servers wurde geändert.',
        'server_reinstalled' => 'Die Neuinstallation dieses Servers wurde in die Warteschlange aufgenommen.',
        'details_updated' => 'Die Serverdetails wurden aktualisiert.',
        'docker_image_updated' => 'Das Standard-Docker-Image wurde geändert. Ein Neustart ist erforderlich.',
        'node_required' => 'Du musst mindestens einen Node konfigurieren, bevor du einen Server hinzufügen kannst.',
        'transfer_nodes_required' => 'Für einen Servertransfer müssen mindestens zwei Nodes konfiguriert sein.',
        'transfer_started' => 'Der Servertransfer wurde gestartet.',
        'transfer_not_viable' => 'Der ausgewählte Node hat nicht genügend freien Speicherplatz oder Arbeitsspeicher für diesen Server.',
    ],
];
