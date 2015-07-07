<?php

$exclusion_list = [
    'Unknown', // we don't have the email in the log
    'thchevalier@mozilla.com', // l10n-driver
    'sethb@mozilla.com', // l10n-driver
    'l10n@mozilla.com', // l10n-driver
    'axel@pike.org', // l10n-driver
    'stas@mozilla.com', // l10n-driver
    'gandalf@mozilla.com', // l10n-driver
    'Callek@gmail.com', // Seamonkey driver
    'zbraniecki@mozilla.com', // l10n-driver
    'jbeatty@mozilla.com', // l10n-driver
    'arky@mozilla.com', // l10n-driver
    'flodolo@mozilla.com', // l10n-driver
    'mdinic@mozilla.com', // L10n-driver
    'dwayne@translate.org.za', // Locamotion
    'craigcook@gmail.com', // Webdev
    'steven@silverorange.com', // Webdev
    'pmclanahan@mozilla.com', // Webdev
    'dpoirier@caktusgroup.com', // Webdev
    'sancus@off.net', // Webdev
    'mkelly@mozilla.com', // Webdev
    'jlong@mozilla.com', // Webdev
    'aricaud@mozilla.com', // Webdev
    'gozer@mozillamessaging.com', // Webdev
    'bking@mozilla.com', // Reps
    'brian@mozdev.org', // Reps
    'catbert@laptop', // Releng
    'armenzg@mozilla.com',// Releng
    'bhearsum@mozilla.com', // Releng
    'bugzilla@standard8.plus.com', // Releng
    'cltbld@moz2-linux-slave1.build.mozilla.org', // Releng
    'kmoir@mozilla.com', // Releng
    'hwine@mozilla.com', // Releng
    'lsblakk@mozilla.com', // Releng
    'release@mozilla.com', // Releng
    'akeybl@mozilla.com', // Releng
    'rail@mozilla.com', // Releng
    'ehsan@mozilla.com', // Dev
    'dbaron@dbaron.org', // Dev
    'john@jon.org', // Releng
    'benjamin@smedbergs.us', // Dev
    'robert.bugzilla@gmail.com', // Dev
    'gavin@gavinsharp.com', // Dev
    'mnoorenberghe@mozilla.com', // Dev
    'bugzilla@babylonsounds.com', //Dev
    'chris@sigxcpu.org', // dev, Debian packager
    'kev@mozilla.com', // Bizdev
    'gerv@mozilla.org', // Licencing
    'root@debian', // undefined
    'admin@localhost', // undefined
    'desktop@desktop-PC', // undefined
    'dev-null@hotmail.co.jp', // undefined
    'pascal.chevrel@mozilla-europe.org', // Ignored because commits for localizers
    'pascal.chevrel@free.fr', // Ignored because commits for localizers
    'theo.chevalier11@gmail.com', // Ignored because commits for localizers
    'flod@lodolo.net', // Ignored because commits for localizers
];

return [
    'dpoirier@caktusgroup.com' => [
        'name'         => 'Daniel Poirier',
        'locale'       => ['developer'],
        'other_emails' => [],
        'other_names'  => []
    ],
    'craigcook@gmail.com' => [
        'name'         => 'Craig Cook',
        'locale'       => ['developer'],
        'other_emails' => [],
        'other_names'  => []
    ],
    'steven@silverorange.com' => [
        'name'         => 'Steven Garrity',
        'locale'       => ['developer'],
        'other_emails' => [],
        'other_names'  => []
    ],
    'jlong@mozilla.com' => [
        'name'         => 'James Long',
        'locale'       => ['developer'],
        'other_emails' => [],
        'other_names'  => []
    ],
    'sancus@off.net' => [
        'name'         => 'Andrei Hajdukewycz',
        'locale'       => ['developer'],
        'other_emails' => [],
        'other_names'  => []
    ],
    'mkelly@mozilla.com' => [
        'name'         => 'Michael Kelly',
        'locale'       => ['developer'],
        'other_emails' => [],
        'other_names'  => []
    ],
    'aricaud@mozilla.com' => [
        'name'         => 'Anthony Ricaud',
        'locale'       => ['developer'],
        'other_emails' => [],
        'other_names'  => []
    ],
    'bking@mozilla.com' => [
        'name'         => 'Brian king',
        'locale'       => ['developer'],
        'other_emails' => [],
        'other_names'  => []
    ],
    'pmclanahan@mozilla.com' => [
        'name'         => 'Paul McLanahan',
        'locale'       => ['developer'],
        'other_emails' => [],
        'other_names'  => []
    ],
    'friedel@translate.org.za' => [
        'name'         => 'Friedel Wolff',
        'locale'       => ['af'],
        'other_emails' => ['fwolff@localhost'],
        'other_names'  => []
    ],
    'dwayne@translate.org.za' => [
        'name'         => 'Dwayne Bailey',
        'locale'       => ['af'],
        'other_emails' => [],
        'other_names'  => []
    ],
    'entaltoaragon@gmail.com' => [
        'name'         => 'Daniel Martinez',
        'locale'       => ['an'],
        'other_emails' => [],
        'other_names'  => []
    ],
    'jojoo.imbeah@suuch.com' => [
        'name'         => 'Jojoo Imbeah',
        'locale'       => ['ak'],
        'other_emails' => [],
        'other_names'  => []
    ],
    'kasahorow@suuch.com' => [
        'name'         => 'Delalorm Kpeli',
        'locale'       => ['ak'],
        'other_emails' => [],
        'other_names'  => []
    ],
    'linux.anas@gmail.com' => [
        'name'         => 'Anas El Husseini',
        'locale'       => ['ar'],
        'other_emails' => [],
        'other_names'  => []
    ],
    'khaledhosny@eglug.org' => [
        'name'         => 'Khaled Hosny',
        'locale'       => ['ar'],
        'other_emails' => [],
        'other_names'  => []
    ],
    'youghourta@gmail.com' => [
        'name'         => 'Youghourta Benali',
        'locale'       => ['ar'],
        'other_emails' => [],
        'other_names'  => []
    ],
    'ngoswami@redhat.com' => [
        'name'         => 'Nilamdyuti Goswami',
        'locale'       => ['as'],
        'other_emails' => [],
        'other_names'  => []
    ],
    'aphukan@redhat.com' => [
        'name'         => 'Amitakhya Phukan',
        'locale'       => ['as'],
        'other_emails' => [],
        'other_names'  => []
    ],
    'malditoastur@gmail.com' => [
        'name'         => 'Iñigo Varela',
        'locale'       => ['ast'],
        'other_emails' => [],
        'other_names'  => []
    ],
    'maacub@gmail.com' => [
        'name'         => 'Marcos Alvares',
        'locale'       => ['ast'],
        'other_emails' => [],
        'other_names'  => []
    ],
    'ismet.sadiqov@gmail.com' => [
        'name'         => 'Ismet Sadiqov',
        'locale'       => ['az'],
        'other_emails' => [],
        'other_names'  => []
    ],
    'emin@mastizada.com' => [
        'name'         => 'Emin Mastizada',
        'locale'       => ['az'],
        'other_emails' => [],
        'other_names'  => []
    ],
    'mozilla_by@poczta.fm' => [
        'name'         => 'Siarei',
        'locale'       => ['be'],
        'other_emails' => [],
        'other_names'  => []
    ],
    'octarina.bg@gmail.com' => [
        'name'         => 'Jivka Alexandrova',
        'locale'       => ['bg'],
        'other_emails' => [],
        'other_names'  => []
    ],
    'ogi@tower.3.bg' => [
        'name'         => 'Ognyan Kulev',
        'locale'       => ['bg'],
        'other_emails' => ['ogi@fmi.uni-sofia.bg', 'ogi@triangle.bg'],
        'other_names'  => []
    ],
    'stoyan@gmx.com' => [
        'name'         => 'Stoyan Dimitrov',
        'locale'       => ['bg'],
        'other_emails' => [],
        'other_names'  => []
    ],
    'pp_peev@mail.bg' => [
        'name'         => 'Pavel Peev',
        'locale'       => ['bg'],
        'other_emails' => [],
        'other_names'  => []
    ],
    'lyubo@lpopov.net' => [
        'name'         => 'Lyubomir Popov',
        'locale'       => ['bg'],
        'other_emails' => [],
        'other_names'  => []
    ],
    'bogomil@efb.bg' => [
        'name'         => 'Bogomil Shopov',
        'locale'       => ['bg'],
        'other_emails' => [],
        'other_names'  => []
    ],
    'm.yovchev@gmail.com' => [
        'name'         => 'Miroslav Yovchev',
        'locale'       => ['bg'],
        'other_emails' => [],
        'other_names'  => []
    ],
    'mahayalamkhan@gmail.com' => [
        'name'         => 'Mahay Alam Khan',
        'locale'       => ['bn-BD'],
        'other_emails' => [],
        'other_names'  => []
    ],
    'itsjamil@gmail.com' => [
        'name'         => 'Jamil Ahmed',
        'locale'       => ['bn-BD'],
        'other_emails' => [],
        'other_names'  => []
    ],
    'brnet00@gmail.com' => [
        'name'         => 'Biraj Karmakar',
        'locale'       => ['bn-IN'],
        'other_emails' => [],
        'other_names'  => []
    ],
    'runab@redhat.com' => [
        'name'         => 'Runa Bhattacharjee',
        'locale'       => ['bn-IN'],
        'other_emails' => ['runabh@gmail.com'],
        'other_names'  => []
    ],
    'sayak.bugsmith@gmail.com' => [
        'name'         => 'Sayak Sarkar',
        'locale'       => ['bn-IN'],
        'other_emails' => [],
        'other_names'  => []
    ],
    'mnedeleg@yahoo.fr' => [
        'name'         => 'Michel Nédélec',
        'locale'       => ['br'],
        'other_emails' => [],
        'other_names'  => []
    ],
    'cpdhutadmal@yahoo.com' => [
        'name'         => 'Chandrakant Dhutadmal',
        'locale'       => ['brx'],
        'other_emails' => [],
        'other_names'  => []
    ],
    'kerim@mozilla.ba' => [
        'name'         => 'Kerim Kalamujic',
        'locale'       => ['bs'],
        'other_emails' => [],
        'other_names'  => []
    ],
    'noguer@gmail.com' => [
        'name'         => 'Quim Perez Noguer',
        'locale'       => ['ca'],
        'other_emails' => [],
        'other_names'  => []
    ],
    'edu@eduard-gamonal.net' => [
        'name'         => 'Eduard Gamonal',
        'locale'       => ['ca'],
        'other_emails' => [],
        'other_names'  => []
    ],
    'toniher@softcatala.org' => [
        'name'         => 'Toni Hermoso Pulido',
        'locale'       => ['ca'],
        'other_emails' => [],
        'other_names'  => []
    ],
    'papapep@gmx.com' => [
        'name'         => 'Josep Sànchez',
        'locale'       => ['ca'],
        'other_emails' => [],
        'other_names'  => []
    ],
    'jasnapaka@jasnapaka.com' => [
        'name'         => 'Pavel Cvrček',
        'locale'       => ['cs'],
        'other_emails' => ['pcvrcek@mozilla.cz'],
        'other_names'  => []
    ],
    'pfranc@mozilla.cz' => [
        'name'         => 'Pavel Franc',
        'locale'       => ['cs'],
        'other_emails' => ['franc@czilla.cz'],
        'other_names'  => []
    ],
    'himynameismartin@gmail.com' => [
        'name'         => 'himynameismartin',
        'locale'       => ['cs'],
        'other_emails' => [],
        'other_names'  => []
    ],
    'michal.stanke@mikk.cz' => [
        'name'         => 'Michal Stanke',
        'locale'       => ['cs'],
        'other_emails' => [],
        'other_names'  => []
    ],
    'jurk@linuxcsb.org' => [
        'name'         => 'Jurk',
        'locale'       => ['csb'],
        'other_emails' => [],
        'other_names'  => []
    ],
    'rprys@yahoo.com' => [
        'name'         => 'Rhoslyn Prys',
        'locale'       => ['cy'],
        'other_emails' => [],
        'other_names'  => ['Rhoslyn Prys [Pootle]']
    ],
    'kscanne@gmail.com' => [
        'name'         => 'Kevin Scannell',
        'locale'       => ['gd'],
        'other_emails' => [],
        'other_names'  => []
    ],
    'david@sheetmusic.org.uk' => [
        'name'         => 'David Chan',
        'locale'       => ['cy'],
        'other_emails' => [],
        'other_names'  => ['David Chan (陳惠明)']
    ],
    'ludvigs@kimludvigsen.dk' => [
        'name'         => 'Kim Ludvigsen',
        'locale'       => ['da'],
        'other_emails' => ['kim@kimludvigsen.dk', 'ludvigs@kimludvigsen', 'ludvigs@kimludvgsen.dk'],
        'other_names'  => []
    ],
    'jakobkpetersen@gmail.com' => [
        'name'         => 'Jakob Kappel Petersen',
        'locale'       => ['da'],
        'other_emails' => [],
        'other_names'  => []
    ],
    'joergenr@stofanet.dk' => [
        'name'         => 'Jørgen Rasmussen',
        'locale'       => ['da'],
        'other_emails' => [],
        'other_names'  => []
    ],
    'mail@jesperkristensen.dk' => [
        'name'         => 'Jesper Kristensen',
        'locale'       => ['da'],
        'other_emails' => [],
        'other_names'  => []
    ],
    'sskroeder@skroeder.dk' => [
        'name'         => 'Søren Munk Skrøder',
        'locale'       => ['da'],
        'other_emails' => ['soeren@skroeder.dk'],
        'other_names'  => []
    ],
    'scootergrisen@gmail.com' => [
        'name'         => 'scootergrisen',
        'locale'       => ['da'],
        'other_emails' => [],
        'other_names'  => []
    ],
    'mail@philipp-wagner.com' => [
        'name'         => 'Philipp Wagner',
        'locale'       => ['de'],
        'other_emails' => [],
        'other_names'  => []
    ],
    'archaeopteryx@coole-files.de' => [
        'name'         => 'Sebastian Hengst',
        'locale'       => ['de'],
        'other_emails' => [],
        'other_names'  => []
    ],
    'kairo@kairo.at' => [
        'name'         => 'Robert Kaiser',
        'locale'       => ['de'],
        'other_emails' => [],
        'other_names'  => []
    ],
    'mozrob@googlemail.com' => [
        'name'         => 'Robert Brand',
        'locale'       => ['de'],
        'other_emails' => [],
        'other_names'  => []
    ],
    'bug@media.fjmail.de' => [
        'name'         => 'Florian J.',
        'locale'       => ['de'],
        'other_emails' => [],
        'other_names'  => []
    ],
    'a.topal@redronin.de' => [
        'name'         => 'Abdulkadir Topal',
        'locale'       => ['de'],
        'other_emails' => [],
        'other_names'  => []
    ],
    'choudharypranay@live.com' => [
        'name'         => 'Pranay Choudhary',
        'locale'       => ['de'],
        'other_emails' => [],
        'other_names'  => []
    ],
    'hpeters@redhat.com' => [
        'name'         => 'Hedda Peters',
        'locale'       => ['de'],
        'other_emails' => [],
        'other_names'  => []
    ],
    'AlexIhrig@thunderbird-mail.de' => [
        'name'         => 'Alexander Ihrig',
        'locale'       => ['de'],
        'other_emails' => [],
        'other_names'  => []
    ],
    '46b@gulli.com' => [
        'name'         => '46b@gulli.com',
        'locale'       => ['de'],
        'other_emails' => [],
        'other_names'  => []
    ],
    'jh@junetz.de' => [
        'name'         => 'Jens Hatlak',
        'locale'       => ['de'],
        'other_emails' => [],
        'other_names'  => []
    ],
    'h.halbach@gmail.com' => [
        'name'         => 'Hagen Halbach',
        'locale'       => ['de'],
        'other_emails' => [],
        'other_names'  => ['Hagen Halbach [Fux]']
    ],
    'opitz.michael@inode.at' => [
        'name'         => 'Michael Opitz',
        'locale'       => ['de'],
        'other_emails' => [],
        'other_names'  => []
    ],
    'andre.fiedler@me.com' => [
        'name'         => 'Andre Fiedler',
        'locale'       => ['de'],
        'other_emails' => [],
        'other_names'  => []
    ],
    'michael.koehler1@gmx.de' => [
        'name'         => 'Michael Köhler',
        'locale'       => ['de'],
        'other_emails' => ['coce@nurfuerspam.de'],
        'other_names'  => ["Michael 'Coce' Koehler"]
    ],
    'thomas.lendo@gmail.com' => [
        'name'         => 'Thomas Schwecherl',
        'locale'       => ['de'],
        'other_emails' => [],
        'other_names'  => []
    ],
    'tobbi.bugs@googlemail.com' => [
        'name'         => 'Tobias Markus',
        'locale'       => ['de'],
        'other_emails' => [],
        'other_names'  => []
    ],
    'pkst@gmx.net' => [
        'name'         => 'Kostas Papadimas',
        'locale'       => ['el'],
        'other_emails' => ['pkst@netscape.net'],
        'other_names'  => []
    ],
    'alexandros@mioglou.me' => [
        'name'         => 'Alexandros Mioglou',
        'locale'       => ['el'],
        'other_emails' => [],
        'other_names'  => []
    ],
    'fredy@fredy.gr' => [
        'name'         => 'Alfredos-Panagiotis Damkalis',
        'locale'       => ['el'],
        'other_emails' => [],
        'other_names'  => ['Alfredos-Panagiotis Damkalis [:fredy]']
    ],
    'sirios2222@yahoo.gr' => [
        'name'         => 'Joseph Psychas',
        'locale'       => ['el'],
        'other_emails' => [],
        'other_names'  => []
    ],
    'fiotakis@otenet.gr' => [
        'name'         => 'George Fiotakis',
        'locale'       => ['el'],
        'other_emails' => [],
        'other_names'  => []
    ],
    'iann_cvs@blueyonder.co.uk' => [
        'name'         => 'Ian Neal',
        'locale'       => ['en-GB'],
        'other_emails' => [],
        'other_names'  => []
    ],
    'trevmrgn+bug@gmail.com' => [
        'name'         => 'Trevor Morgan',
        'locale'       => ['en-GB'],
        'other_emails' => [],
        'other_names'  => []
    ],
    'moz_en-gb@tyndall.org.uk' => [
        'name'         => 'Mark Tyndall',
        'locale'       => ['en-GB'],
        'other_emails' => [],
        'other_names'  => []
    ],
    'eduardo@esperanto.org.uy' => [
        'name'         => 'Eduardo Trápani',
        'locale'       => ['eo'],
        'other_emails' => [],
        'other_names'  => []
    ],
    'mpoli@lt24.zzn.com' => [
        'name'         => 'Marcelo Poli',
        'locale'       => ['es-AR'],
        'other_emails' => ['marcelo@ubuntu'],
        'other_names'  => []
    ],
    'willyaranda@gmail.com' => [
        'name'         => 'Guillermo López',
        'locale'       => ['es-ES'],
        'other_emails' => ['guillermo@guillermo-laptop', 'willyaranda@mozilla-hispano.org',
                           'willyaranda@macbook-de-guillermo-leal.local'],
        'other_names'  => []
    ],
    'guillermo.movia@gmail.com' => [
        'name'         => 'Guillermo Movia',
        'locale'       => ['es-AR'],
        'other_emails' => [],
        'other_names'  => []
    ],
    'nukeador@gmail.com' => [
        'name'         => 'Rubén Martín',
        'locale'       => ['es-ES'],
        'other_emails' => [],
        'other_names'  => []
    ],
    'inmitabarrios@gmail.com' => [
        'name'         => 'Inma Barrios',
        'locale'       => ['es-ES'],
        'other_emails' => [],
        'other_names'  => []
    ],
    'ravmn@ravmn.com' => [
        'name'         => 'Richard von Moltke',
        'locale'       => ['es-CL'],
        'other_emails' => ['ravmn@ravmn.cl'],
        'other_names'  => []
    ],
    'djfunkinmixer@gmail.com' => [
        'name'         => 'Emilio Sepulveda',
        'locale'       => ['es-CL'],
        'other_emails' => [],
        'other_names'  => []
    ],
    'rpmdisguise-otros@yahoo.es' => [
        'name'         => 'Ricardo Palomares',
        'locale'       => ['es-ES'],
        'other_emails' => [],
        'other_names'  => []
    ],
    'fer@striptm.com' => [
        'name'         => 'Fernando García Gómez',
        'locale'       => ['es-ES'],
        'other_emails' => [],
        'other_names'  => []
    ],
    'mautematico@mozilla-mexico.org' => [
        'name'         => 'Mauricio Navarro',
        'locale'       => ['es-MX'],
        'other_emails' => [],
        'other_names'  => []
    ],
    'ricardozilla@gmail.com' => [
        'name'         => 'Ricardo Meza',
        'locale'       => ['es-MX'],
        'other_emails' => [],
        'other_names'  => []
    ],
    'odinmojica@mozilla-mexico.org' => [
        'name'         => 'Odín Mojica',
        'locale'       => ['es-MX'],
        'other_emails' => [],
        'other_names'  => []
    ],
    'sander.lepik@eesti.ee' => [
        'name'         => 'Sander Lepik',
        'locale'       => ['et'],
        'other_emails' => [],
        'other_names'  => []
    ],
    'merike.sell@eesti.ee' => [
        'name'         => 'Merike Sell',
        'locale'       => ['et'],
        'other_emails' => [],
        'other_names'  => []
    ],
    'julenx@gmail.com' => [
        'name'         => 'Julen Ruiz Aizpuru',
        'locale'       => ['eu'],
        'other_emails' => [],
        'other_names'  => []
    ],
    'pi@zerb.beobide.net' => [
        'name'         => 'Piarres Beobide',
        'locale'       => ['eu'],
        'other_emails' => [],
        'other_names'  => []
    ],
    'ibai@oihanguren.com' => [
        'name'         => 'Ibai Oihanguren',
        'locale'       => ['eu'],
        'other_emails' => [],
        'other_names'  => []
    ],
    'katsuyori@mail.com' => [
        'name'         => 'Mohammad Reza Hajianpour',
        'locale'       => ['fa'],
        'other_emails' => [],
        'other_names'  => ['Mohammad Reza Hajianpour [pootle]']
    ],
    'digitsm@gmail.com' => [
        'name'         => 'Sina Momken',
        'locale'       => ['fa'],
        'other_emails' => [],
        'other_names'  => []
    ],
    'behnam@zwnj.org' => [
        'name'         => 'Behnam Esfahbod',
        'locale'       => ['fa'],
        'other_emails' => [],
        'other_names'  => ['Behnam Esfahbod "ZWNJ"']
    ],
    'ehsan.akhgari@gmail.com' => [
        'name'         => 'Ehsan Akhgari',
        'locale'       => ['fa'],
        'other_emails' => [],
        'other_names'  => []
    ],
    'mousavi.arash@gmail.com' => [
        'name'         => 'Arash Mousavi',
        'locale'       => ['fa'],
        'other_emails' => [],
        'other_names'  => []
    ],
    'ibrahima.sarr@pulaagu.com' => [
        'name'         => 'Ibrahima Sarr',
        'locale'       => ['ff'],
        'other_emails' => [],
        'other_names'  => []
    ],
    'akilaa@wippies.fi' => [
        'name'         => 'Aki Laaksovirta',
        'locale'       => ['fi'],
        'other_emails' => [],
        'other_names'  => []
    ],
    'villepohjanheimo+bugzilla@fastmail.fm' => [
        'name'         => 'Ville Pohjanheimo',
        'locale'       => ['fi'],
        'other_emails' => ['ville@debian'],
        'other_names'  => []
    ],
    'pascal@chevrel.org' => [
        'name'         => 'Pascal Chevrel',
        'locale'       => ['fr'],
        'other_emails' => ['pascal.chevrel@free.fr', 'pascal@mozilla.com',
                           'pascal.chevrel@mozilla-europe.org', 'pascalc@gmail.com'],
        'other_names'  => ['pascalc', 'pascalchevrel'],
    ],
    'theo.chevalier11@gmail.com' => [
        'name'         => 'Théo Chevalier',
        'locale'       => ['fr'],
        'other_emails' => ['thchevalier@mozilla.com'],
        'other_names'  => [],
    ],
    'daniel.calonnec@gmail.com' => [
        'name'         => 'Stephane Calonnec',
        'locale'       => ['fr'],
        'other_emails' => [],
        'other_names'  => []
    ],
    'benoit.leseul@gmail.com' => [
        'name'         => 'Benoit Leseul',
        'locale'       => ['fr'],
        'other_emails' => [],
        'other_names'  => []
    ],
    'goofy.bugzilla@gmail.com' => [
        'name'         => 'Jean-Bernard Marcon',
        'locale'       => ['fr'],
        'other_emails' => ['goofyfr@gmail.com'],
        'other_names'  => []
    ],
    'clochix@clochix.net' => [
        'name'         => 'clochix@clochix.net',
        'locale'       => ['fr'],
        'other_emails' => [],
        'other_names'  => []
    ],
    'filip@disque-monde.org' => [
        'name'         => 'Philippe Dessante',
        'locale'       => ['fr'],
        'other_emails' => [],
        'other_names'  => []
    ],
    'fred.castles@laposte.net' => [
        'name'         => 'Frédéric Chateaux',
        'locale'       => ['fr'],
        'other_emails' => ['fredchat@frenchmozilla.org'],
        'other_names'  => ['Frederic Chateaux']
    ],
    'cedric.corazza@wanadoo.fr' => [
        'name'         => 'Cédric Corazza',
        'locale'       => ['fr'],
        'other_emails' => [],
        'other_names'  => []
    ],
    'nicolas.delebecque@gmail.com' => [
        'name'         => 'Nicolas Delebecque',
        'locale'       => ['fr'],
        'other_emails' => [],
        'other_names'  => []
    ],
    'alizee.aubertin@gmail.com' => [
        'name'         => 'Alizée Aubertin',
        'locale'       => ['fr'],
        'other_emails' => [],
        'other_names'  => []
    ],
    'alice.lieutier@gmail.com' => [
        'name'         => 'Alice Lieutier',
        'locale'       => ['fr'],
        'other_emails' => [],
        'other_names'  => []
    ],
    'fryskefirefox@gmail.com' => [
        'name'         => 'Wim Benes',
        'locale'       => ['fy-NL', 'nl'],
        'other_emails' => ['w.benes@gmail.com'],
        'other_names'  => ['wim'],
    ],
    'fios@akerbeltz.org' => [
        'name'         => 'Michael Bauer ',
        'locale'       => ['gd'],
        'other_emails' => [],
        'other_names'  => []
    ],
    'eu@keko.me' => [
        'name'         => 'Enrique Estévez Fernández',
        'locale'       => ['gl'],
        'other_emails' => [],
        'other_names'  => []
    ],
    'fjrial@cesga.es' => [
        'name'         => 'Frco. Javier Rial',
        'locale'       => ['gl'],
        'other_emails' => [],
        'other_names'  => []
    ],
    'suso.baleato@xunta.es' => [
        'name'         => 'Suso Baleato',
        'locale'       => ['gl'],
        'other_emails' => [],
        'other_names'  => []
    ],
    'swkothar@redhat.com' => [
        'name'         => 'Sweta Kothari',
        'locale'       => ['gu-IN'],
        'other_emails' => ['swkothar@localhost.localdomain'],
        'other_names'  => []
    ],
    'ankit644@yahoo.com' => [
        'name'         => 'Ankit Patel',
        'locale'       => ['gu-IN'],
        'other_emails' => ['ankit@redhat.com', 'ankit@localhost.localdomain'],
        'other_names'  => []
    ],
    'tomer@gmx.net' => [
        'name'         => 'Tomer Cohen',
        'locale'       => ['he'],
        'other_emails' => [],
        'other_names'  => []
    ],
    'amir.aharoni@mail.huji.acil' => [
        'name'         => 'Amir E. Aharoni',
        'locale'       => ['he'],
        'other_emails' => [],
        'other_names'  => []
    ],
    'sale@ubuntu-hr.org' => [
        'name'         => 'Saša Teković',
        'locale'       => ['hr'],
        'other_emails' => ['sasa@tekovic.com'],
        'other_names'  => ['Sasa Tekovic']
    ],
    'mihovil.stanic@gmail.com' => [
        'name'         => 'Mihovil Stanic',
        'locale'       => ['hr'],
        'other_emails' => [],
        'other_names'  => []
    ],
    'ivoks@ubuntu.com' => [
        'name'         => 'Ante Karamatic',
        'locale'       => ['hr'],
        'other_emails' => ['ivoks@titan'],
        'other_names'  => []
    ],
    'antun.koncic@gmail.com' => [
        'name'         => 'Antun Koncic',
        'locale'       => ['hr'],
        'other_emails' => [],
        'other_names'  => []
    ],
    'kami911@gmail.com' => [
        'name'         => 'Kálmán Szalai',
        'locale'       => ['hu'],
        'other_emails' => ['szalaik@navi126', 'kamihir@freemail.hu', 'kamihir@freemail.com'],
        'other_names'  => []
    ],
    'kelemeng@ubuntu.com' => [
        'name'         => 'Gabor Kelemen',
        'locale'       => ['hu'],
        'other_emails' => [],
        'other_names'  => []
    ],
    'timar@fsf.hu' => [
        'name'         => 'Andras Timar',
        'locale'       => ['hu'],
        'other_emails' => ['timar@AndrasX60'],
        'other_names'  => []
    ],
    'kkemenczy@gmail.com' => [
        'name'         => 'Kálmán Kéménczy',
        'locale'       => ['hu'],
        'other_emails' => [],
        'other_names'  => []
    ],
    'armenzg@mozilla.com' => [
        'name'         => 'Armen Zambrano Gasparnian', // employee, mentor
        'locale'       => ['hy-AM'],
        'other_emails' => [],
        'other_names'  => []
    ],
    'hrant@freenet.am' => [
        'name'         => 'Hrant Ohanyan',
        'locale'       => ['hy-AM'],
        'other_emails' => [],
        'other_names'  => []
    ],
    'romi@mozilla.web.id' => [
        'name'         => 'Romi Hardiyanto',
        'locale'       => ['id'],
        'other_emails' => ['romihardiyanto@gmail.com'],
        'other_names'  => ['Romi Hardiyanto [pootle]']
    ],
    'kristjanbjarni@gmail.com' => [
        'name'         => 'Kristján Bjarni Guðmundsson',
        'locale'       => ['is'],
        'other_emails' => [],
        'other_names'  => []
    ],
    'francesco.lodolo@mozillaitalia.org' => [
        'name'         => 'Francesco Lodolo',
        'locale'       => ['it'],
        'other_emails' => ['flod@lodolo.net', 'flodolo@mozilla.com','francesco.lodolo@gmail.com',
                           'flodolo@meriadoc', 'flodolo@legolas'],
        'other_names'  => ['Francesco Lodolo (:flod)']
    ],
    'iacopo.benesperi@mozillaitalia.org' => [
        'name'         => 'Iacopo Benesperi',
        'locale'       => ['it'],
        'other_emails' => [],
        'other_names'  => []
    ],
    'robpri@email.it' => [
        'name'         => 'Roberto Principiano',
        'locale'       => ['it'],
        'other_emails' => ['roberto.principiano@mozillaitalia.org', 'robertoxp@roberto-xp'],
        'other_names'  => []
    ],
    'sara.todaro@mozillaitalia.org' => [
        'name'         => 'Sara Todaro',
        'locale'       => ['it'],
        'other_emails' => [],
        'other_names'  => []
    ],
    'gialloporpora@mozillaitalia.org' => [
        'name'         => 'Sandro Della Giustina',
        'locale'       => ['it'],
        'other_emails' => [],
        'other_names'  => []
    ],
    'h.rayflood@gmail.com' => [
        'name'         => 'ABE Hiroki (hATrayflood)',
        'locale'       => ['ja'],
        'other_emails' => [],
        'other_names'  => []
    ],
    'yu-yamamoto@kddi-tech.com' => [
        'name'         => 'Yusuke Yamamoto',
        'locale'       => ['ja'],
        'other_emails' => [],
        'other_names'  => []
    ],
    'chimantaea_mirabilis@yahoo.co.jp' => [
        'name'         => 'Masahiko Imanaka',
        'locale'       => ['ja'],
        'other_emails' => [],
        'other_names'  => []
    ],
    'nagato.kasaki@gmail.com' => [
        'name'         => 'knagato',
        'locale'       => ['ja'],
        'other_emails' => ['e2.718281828459045nk@gmail.com'],
        'other_names'  => []
    ],
    'info@kechol.net' => [
        'name'         => 'Kechol',
        'locale'       => ['ja'],
        'other_emails' => [],
        'other_names'  => []
    ],
    'demonnroki3150@gmail.com' => [
        'name'         => 'Daiki Noda',
        'locale'       => ['ja'],
        'other_emails' => [],
        'other_names'  => []
    ],
    'dynamis@mozilla-japan.org' => [
        'name'         => 'Tomoya ASAI',
        'locale'       => ['ja'],
        'other_emails' => ['dynamis@firehacks.org'],
        'other_names'  => []
    ],
    'hmatrjp@users.sourceforge.jp' => [
        'name'         => 'Takeshi Hamasaki',
        'locale'       => ['ja'],
        'other_emails' => [],
        'other_names'  => []
    ],
    'nshimizu@mozilla-japan.org' => [
        'name'         => 'Noritada Shimizu',
        'locale'       => ['ja'],
        'other_emails' => [],
        'other_names'  => []
    ],
    'yoshino@mozilla-japan.org' => [
        'name'         => 'Kohei yoshino',
        'locale'       => ['ja'],
        'other_emails' => ['kohei.yoshino@gmail.com'],
        'other_names'  => []
    ],
    'giasher@telenet.ge' => [
        'name'         => 'Gia Shervashidze',
        'locale'       => ['ka'],
        'other_emails' => ['giasher@gmail.com'],
        'other_names'  => []
    ],
    'tim_tim2000@mail.ru' => [
        'name'         => 'Timur Timirkhanov',
        'locale'       => ['kk'],
        'other_emails' => [],
        'other_names'  => []
    ],
    'jambooop@mail.ru' => [
        'name'         => 'jambooop@mail.ru',
        'locale'       => ['kk'],
        'other_emails' => [],
        'other_names'  => []
    ],
    'vannak.eng@gmail.com' => [
        'name'         => 'Vannak Eng',
        'locale'       => ['km'],
        'other_emails' => ['inu2d@yahoo.com'],
        'other_names'  => []
    ],
    'svenkate@redhat.com' => [
        'name'         => 'Shankar Prasad',
        'locale'       => ['kn'],
        'other_emails' => ['prasad.mvs@gmail.com'],
        'other_names'  => ['Shankar Prasad [Pootle]']
    ],
    'hyeonseok@gmail.com' => [
        'name'         => 'Hyeonseok Shin',
        'locale'       => ['ko'],
        'other_emails' => [],
        'other_names'  => []
    ],
    'jincreator@jincreator.net' => [
        'name'         => 'Jinkyu Yi',
        'locale'       => ['ko'],
        'other_emails' => [],
        'other_names'  => []
    ],
    'diginalog@gmail.com' => [
        'name'         => 'Myoung-Gwon Yang',
        'locale'       => ['ko'],
        'other_emails' => [],
        'other_names'  => []
    ],
    'pillarlee16@gmail.com' => [
        'name'         => 'ByeongJu Lee',
        'locale'       => ['ko'],
        'other_emails' => [],
        'other_names'  => []
    ],
    'channy@mozilla.or.kr' => [
        'name'         => 'Channy Yun',
        'locale'       => ['ko'],
        'other_emails' => [],
        'other_names'  => []
    ],
    'thechunsik@gmail.com' => [
        'name'         => 'thechunsik',
        'locale'       => ['ko'],
        'other_emails' => [],
        'other_names'  => []
    ],
    'bopy@Bopyui-MacBook-Air.local' => [
        'name'         => 'Bopy',
        'locale'       => ['ko'],
        'other_emails' => [],
        'other_names'  => []
    ],
    'admin@oops.org' => [
        'name'         => 'JoungKyun Kim',
        'locale'       => ['ko'],
        'other_emails' => [],
        'other_names'  => ['JoungKyun.Kim']
    ],
    'joone.hur@gmail.com' => [
        'name'         => 'Joone Hur',
        'locale'       => ['ko'],
        'other_emails' => [],
        'other_names'  => []
    ],
    'walter@translate.org.za' => [
        'name'         => 'Walter Leibbrandt',
        'locale'       => ['lg'],
        'other_emails' => [],
        'other_names'  => []
    ],
    'sjolweny85@yahoo.co.uk' => [
        'name'         => 'San Emmanuel James',
        'locale'       => ['lg'],
        'other_emails' => [],
        'other_names'  => []
    ],
    'alessio.gastaldi@libero.it' => [
        'name'         => 'Alessio Gastaldi',
        'locale'       => ['lij'],
        'other_emails' => [],
        'other_names'  => []
    ],
    'Sergio@Puffo' => [
        'name'         => 'Alan Gazzano',
        'locale'       => ['lij'],
        'other_emails' => [],
        'other_names'  => []
    ],
    'rq@akl.lt' => [
        'name'         => 'Rimas Kudelis',
        'locale'       => ['lt'],
        'other_emails' => ['rq@sugar'],
        'other_names'  => []
    ],
    'orvils@gmail.com' => [
        'name'         => 'Raivis Dejus',
        'locale'       => ['lv'],
        'other_emails' => ['orvils@laptop', 'orvils@orvils-laptop'],
        'other_names'  => []
    ],
    'jm-gailis@fai-vianet.fr' => [
        'name'         => 'Jānis Marks Gailis',
        'locale'       => ['lv'],
        'other_emails' => [],
        'other_names'  => []
    ],
    'rranjan@redhat.com' => [
        'name'         => 'Rajesh Ranjan',
        'locale'       => ['mai'],
        'other_emails' => ['rajeshkajha@yahoo.com', 'rranjan@localhost.localdomain'],
        'other_names'  => []
    ],
    'sangeeta_0975@yahoo.com' => [
        'name'         => 'Sangeeta Kumari',
        'locale'       => ['mai'],
        'other_emails' => [],
        'other_names'  => []
    ],
    'gdamjan@gmail.com' => [
        'name'         => 'Damjan Georgievski',
        'locale'       => ['mk'],
        'other_emails' => [],
        'other_names'  => []
    ],
    'goce.mitevski@gmail.com' => [
        'name'         => 'Goce Mitevski',
        'locale'       => ['mk'],
        'other_emails' => [],
        'other_names'  => []
    ],
    'nnovica@gmail.com' => [
        'name'         => 'Novica Nakov',
        'locale'       => ['mk'],
        'other_emails' => [],
        'other_names'  => []
    ],
    'apeter@redhat.com' => [
        'name'         => 'Ani Peter',
        'locale'       => ['ml'],
        'other_emails' => ['peter.ani@gmail.com', 'apeter@localhost.localdomain'],
        'other_names'  => []
    ],
    'natsag2000@yahoo.com' => [
        'name'         => 'Natsagdorj Shagdar',
        'locale'       => ['mn'],
        'other_emails' => [],
        'other_names'  => []
    ],
    'sshedmak@redhat.com' => [
        'name'         => 'Sandeep Sheshrao Shedmake',
        'locale'       => ['mr'],
        'other_emails' => ['sshedmak@localhost.localdomain'],
        'other_names'  => []
    ],
    'djaniketster@gmail.com' => [
        'name'         => 'Aniket Deshpande',
        'locale'       => ['mr'],
        'other_emails' => [],
        'other_names'  => []
    ],
    'creativeneuron8@gmail.com' => [
        'name'         => 'Syafiq Mazli',
        'locale'       => ['ms'],
        'other_emails' => [],
        'other_names'  => []
    ],
    'havard.mork@gmail.com' => [
        'name'         => 'Håvard Mork',
        'locale'       => ['nb-NO', 'nn-NO'],
        'other_emails' => ['hmork@l10n.nl.mozilla.org'],
        'other_names'  => []
    ],
    'dagolav@prestegarden.com' => [
        'name'         => 'Dag Olav Prestegarden',
        'locale'       => ['nb-NO'],
        'other_emails' => [],
        'other_names'  => []
    ],
    'tonnes.mb@gmail.com' => [
        'name'         => 'Ton Kessen',
        'locale'       => ['nl'],
        'other_emails' => [],
        'other_names'  => []
    ],
    'bugzilla@planet.nl' => [
        'name'         => 'Tim Maks van den Broek',
        'locale'       => ['nl'],
        'other_emails' => ['thunderbird-nl@planet.nl', 'timmaks@tim-laptop', 'user@asus-1243860619.lan'],
        'other_names'  => []
    ],
    'bjornivars@gmail.com' => [
        'name'         => 'Bjorn Svindseth',
        'locale'       => ['nn-NO'],
        'other_emails' => [],
        'other_names'  => []
    ],
    'pheledi@mosekola.co.za' => [
        'name'         => 'Pheledi Mathibela',
        'locale'       => ['nso'],
        'other_emails' => [],
        'other_names'  => []
    ],
    'yannig@marchegay.org' => [
        'name'         => 'Yannig Marchegay',
        'locale'       => ['oc'],
        'other_emails' => [],
        'other_names'  => []
    ],
    'cvalmary@yahoo.fr' => [
        'name'         => 'Cédric Valmary',
        'locale'       => ['oc'],
        'other_emails' => [],
        'other_names'  => []
    ],
    'mgiri@redhat.com' => [
        'name'         => 'Manoj Kumar Giri',
        'locale'       => ['or'],
        'other_emails' => [],
        'other_names'  => []
    ],
    'amanpreet.alam@gmail.com' => [
        'name'         => 'Amanpreet Singh Alam',
        'locale'       => ['pa-IN'],
        'other_emails' => ['apbrar@gmail.com', 'aalam@users.sf.net',
                           'areet.alam@gmail.com', 'apreet.alam@gmail.com',
                           'aalam@alam.satluj.com',  'aalam@localhost.localdomain',
                           'aalam@linux-1f05.site'],
        'other_names'  => []
    ],
    'splewako@aviary.pl' => [
        'name'         => 'Stefan Plewako',
        'locale'       => ['pl'],
        'other_emails' => [],
        'other_names'  => []
    ],
    'akalla@aviary.pl' => [
        'name'         => 'Adrian Kalla',
        'locale'       => ['pl'],
        'other_emails' => [],
        'other_names'  => []
    ],
    'sprussak@aviary.pl' => [
        'name'         => 'Sara Prussak',
        'locale'       => ['pl'],
        'other_emails' => [],
        'other_names'  => []
    ],
    'jmazgaj@aviary.pl' => [
        'name'         => 'Joanna Mazgaj',
        'locale'       => ['pl'],
        'other_emails' => [],
        'other_names'  => []
    ],
    'marcoos@aviary.pl' => [
        'name'         => 'Marek Stepien',
        'locale'       => ['pl'],
        'other_emails' => [],
        'other_names'  => []
    ],
    'kstawarz@aviary.pl' => [
        'name'         => 'Katarzyna Stawarz',
        'locale'       => ['pl'],
        'other_emails' => [],
        'other_names'  => []
    ],
    'dmaciejewski@aviary.pl' => [
        'name'         => 'Dariusz Maciejewski',
        'locale'       => ['pl'],
        'other_emails' => [],
        'other_names'  => []
    ],
    'hubert@hubertgajewski.com' => [
        'name'         => 'Hubert Gajewski',
        'locale'       => ['pl'],
        'other_emails' => [],
        'other_names'  => []
    ],
    'witia@aviary.pl' => [
        'name'         => 'Wojciech Szczęsny',
        'locale'       => ['pl'],
        'other_emails' => ['wszczesny@aviary.pl'],
        'other_names'  => []
    ],
    'fernandopsilveira@yahoo.com.br' => [
        'name'         => 'Fernando Pereira Silveira',
        'locale'       => ['pt-BR'],
        'other_emails' => ['fenandopsilveira@yahoo.com.br'],
        'other_names'  => []
    ],
    'hultmann@gmail.com' => [
        'name'         => 'Jeferson Hultmann',
        'locale'       => ['pt-BR'],
        'other_emails' => ['Eu@Jeferson-PC'],
        'other_names'  => []
    ],
    'asrail@gmail.com' => [
        'name'         => 'Caio Tiago Oliveira',
        'locale'       => ['pt-BR'],
        'other_emails' => [],
        'other_names'  => []
    ],
    'hultmann@pobox.com' => [
        'name'         => 'Jeferson Hultmann',
        'locale'       => ['pt-BR'],
        'other_emails' => [],
        'other_names'  => ['Eu@Jeferson-PC']
    ],
    'reuben.morais@gmail.com' => [
        'name'         => 'Reuben Morais',
        'locale'       => ['pt-BR'],
        'other_emails' => [],
        'other_names'  => []
    ],
    'fabiohmagnoni@gmail.com' => [
        'name'         => 'Fabio Magnoni',
        'locale'       => ['pt-BR'],
        'other_emails' => [],
        'other_names'  => []
    ],
    'mlcaraldi@gmail.com' => [
        'name'         => 'Marcelo Araldi',
        'locale'       => ['pt-BR'],
        'other_emails' => ['lloco@Carlos', 'lloco@Carlos.lan', 'lloco@carlos',
                           'lloco@carlos.lan', 'lloco@carlos.netvisao.pt',
                           'lloco@carlos.192.168.10.1'],
        'other_names'  => []
    ],
    'cesperanc@gmail.com' => [
        'name'         => 'Claudio Esperança',
        'locale'       => ['pt-PT'],
        'other_emails' => [],
        'other_names'  => []
    ],
    'lloco73@gmail.com' => [
        'name'         => 'Carlos Simão',
        'locale'       => ['pt-PT'],
        'other_emails' => [],
        'other_names'  => []
    ],
    'joao.neves@intraneia.com' => [
        'name'         => 'João Neves',
        'locale'       => ['pt-PT'],
        'other_emails' => [],
        'other_names'  => []
    ],
    'gion-andri@gmx.ch' => [
        'name'         => 'Gion-Andri Cantieni',
        'locale'       => ['rm'],
        'other_emails' => [],
        'other_names'  => []
    ],
    'alexxed@gmail.com' => [
        'name'         => 'Alexandru Szasz',
        'locale'       => ['ro'],
        'other_emails' => ['alexandru.szasz@lingo24.com', 'alex@narro.softwreliber.ro',
                           'alex@localhost.localdomain'],
        'other_names'  => []
    ],
    'chiorean.ioana@gmail.com' => [
        'name'         => 'Stefania Ioana Chiorean',
        'locale'       => ['ro'],
        'other_emails' => [],
        'other_names'  => []
    ],
    'jobaval10n@gmail.com' => [
        'name'         => 'Jobava',
        'locale'       => ['ro'],
        'other_emails' => [],
        'other_names'  => []
    ],
    'raul.malea@mozilla.ro' => [
        'name'         => 'Raul Malea',
        'locale'       => ['ro'],
        'other_emails' => ['raul.malea@gmail.com'],
        'other_names'  => []
    ],
    'cristian.silaghi@mozilla.ro' => [
        'name'         => 'Cristian Silaghi',
        'locale'       => ['ro'],
        'other_emails' => [],
        'other_names'  => []
    ],
    'unghost@mozilla-russia.org' => [
        'name'         => 'Alexander L. Slovesnik',
        'locale'       => ['ru'],
        'other_emails' => [],
        'other_names'  => []
    ],
    'lakostis@mozilla-russia.org' => [
        'name'         => 'Konstantin A. Lepikhov',
        'locale'       => ['ru'],
        'other_emails' => [],
        'other_names'  => []
    ],
    'ragnaar@mozilla-russia.org' => [
        'name'         => 'Alexey Gubanov',
        'locale'       => ['ru'],
        'other_emails' => [],
        'other_names'  => []
    ],
    'als@mozilla.ru' => [
        'name'         => 'Alexander Slovesnik',
        'locale'       => ['ru'],
        'other_emails' => [],
        'other_names'  => []
    ],
    'rohana@accmt.ac.lk' => [
        'name'         => 'Rohana Dasanayaka',
        'locale'       => ['ta-LK'],
        'other_emails' => [],
        'other_names'  => []
    ],
    'danishka@gmail.com' => [
        'name'         => 'Danishka Navin',
        'locale'       => ['si'],
        'other_emails' => [],
        'other_names'  => ['Danishka Navin [pootle]']
    ],
    'valastiak@mozilla.sk' => [
        'name'         => 'Vlado Valaštiak',
        'locale'       => ['sk'],
        'other_emails' => [],
        'other_names'  => []
    ],
    'sektormaster@atlas.sk' => [
        'name'         => 'Branislav Rozbora',
        'locale'       => ['sk'],
        'other_emails' => ['rozbora@mozilla.sk', 'Branislav@IBM-BB'],
        'other_names'  => []
    ],
    'smolejv@gmx.net' => [
        'name'         => 'Vito Smolej',
        'locale'       => ['sl'],
        'other_emails' => [],
        'other_names'  => []
    ],
    'matjaz.horvat@gmail.com' => [
        'name'         => 'Matjaz Horvat',
        'locale'       => ['sl'],
        'other_emails' => ['m@owca.info', 'matjaz@mozilla.com '],
        'other_names'  => []
    ],
    'mh@bollag-areal.ch' => [
        'name'         => 'Mohomodou Houssouba',
        'locale'       => ['son'],
        'other_emails' => [],
        'other_names'  => []
    ],
    'besnik@programeshqip.org' => [
        'name'         => 'Besnik Bleta',
        'locale'       => ['sq'],
        'other_emails' => ['besnik@localhost.localdomain'],
        'other_names'  => []
    ],
    'filmil@gmail.com' => [
        'name'         => 'Filip Miletic',
        'locale'       => ['sr'],
        'other_emails' => ['filmil%gmail.com@mozilla.org'],
        'other_names'  => ['filmil']
    ],
    'mdinic@mozilla.com' => [
        'name'         => 'Milos Dinic',
        'locale'       => ['sr'],
        'other_emails' => [],
        'other_names'  => []
    ],
    'auzelac91@gmail.com' => [
        'name'         => 'Aleksandra Uzelac',
        'locale'       => ['sr'],
        'other_emails' => [],
        'other_names'  => []
    ],
    'tumbas93@gmail.com' => [
        'name'         => 'Vanja Tumbas',
        'locale'       => ['sr'],
        'other_emails' => [],
        'other_names'  => []
    ],
    'milan@mozilla.com' => [
        'name'         => 'Milan Sreckovic',
        'locale'       => ['sr'],
        'other_emails' => [],
        'other_names'  => []
    ],
    'oskar.ivanic@gmail.com' => [
        'name'         => 'Oskar Ivanic',
        'locale'       => ['sr'],
        'other_emails' => [],
        'other_names'  => ['icecold']
    ],
    'peter@kihlstedt.se' => [
        'name'         => 'Peter Kihlstedt',
        'locale'       => ['sv-SE'],
        'other_emails' => [],
        'other_names'  => []
    ],
    'hasse@jasajudeju.se' => [
        'name'         => 'Hans Wallanger',
        'locale'       => ['sv-SE'],
        'other_emails' => [],
        'other_names'  => []
    ],
    'az@kth.se' => [
        'name'         => 'Andreas Pettersson',
        'locale'       => ['sv-SE'],
        'other_emails' => [],
        'other_names'  => []
    ],
    'alexander@alphaone.se' => [
        'name'         => 'Alexander Lindqvist',
        'locale'       => ['sv-SE'],
        'other_emails' => ['alexander@bitspace.se'],
        'other_names'  => []
    ],
    'pkihl@passagen.se' => [
        'name'         => 'Peter Kihlstedt',
        'locale'       => ['sv-SE'],
        'other_emails' => [],
        'other_names'  => []
    ],
    'mikael.hafo@gmail.com' => [
        'name'         => 'Mikael Hiort af Ornäs',
        'locale'       => ['sv-SE'],
        'other_emails' => [],
        'other_names'  => []
    ],
    'bonifacechallo@yahoo.com' => [
        'name'         => 'Boniface Challo',
        'locale'       => ['sw'],
        'other_emails' => [],
        'other_names'  => ['Boniface']
    ],
    'arunprakash.pts@gmail.com' => [
        'name'         => 'Arun Prakash',
        'locale'       => ['ta'],
        'other_emails' => [],
        'other_names'  => []
    ],
    'vallavan2valluvan@gmail.com' => [
        'name'         => 'Gauthamraj Elango',
        'locale'       => ['ta'],
        'other_emails' => [],
        'other_names'  => []
    ],
    'ifelix25@gmail.com' => [
        'name'         => 'I. Felix',
        'locale'       => ['ta'],
        'other_emails' => ['ifelix@redhat.com', 'ifelix@localhost.localdomain'],
        'other_names'  => []
    ],
    'kkrothap@redhat.com' => [
        'name'         => 'Krishnababu Krothapalli',
        'locale'       => ['te'],
        'other_emails' => ['k.meetme@gmail.com', 'kkrothap@localhost.localdomain'],
        'other_names'  => []
    ],
    'veeven@gmail.com' => [
        'name'         => 'Veeven',
        'locale'       => ['te'],
        'other_emails' => [],
        'other_names'  => []
    ],
    'arjunaraoc@gmail.com' => [
        'name'         => 'Arjuna Rao',
        'locale'       => ['te'],
        'other_emails' => ['arjunaraoc@googlemail.com', 'arjun@ubuntu'],
        'other_names'  => []
    ],
    'kengggg@gmail.com' => [
        'name'         => 'Patipat Susumpow',
        'locale'       => ['th'],
        'other_emails' => [],
        'other_names'  => []
    ],
    'selim@sum.lu' => [
        'name'         => 'Selim Sumlu',
        'locale'       => ['tr'],
        'other_emails' => ['selim@selimsumlu.com.tr', 'Selim@Selim-PCnet.hurguc.local',
                           'Selim@selim-win8.hurguc.local','Selim@Selim-vp'],
        'other_names'  => []
    ],
    'rail@i-rs.ru' => [
        'name'         => 'Rail Aliev',
        'locale'       => ['tr'],
        'other_emails' => ['rail@mozilla.com','rail@openoffice.org'],
        'other_names'  => []
    ],
    'erkan@linux-sevenler.org' => [
        'name'         => 'Erkan Kaplan',
        'locale'       => ['tr'],
        'other_emails' => [],
        'other_names'  => []
    ],
    'tim.babych@gmail.com' => [
        'name'         => 'Tim Babych',
        'locale'       => ['uk'],
        'other_emails' => [],
        'other_names'  => []
    ],
    'ted.korostiled@gmail.com' => [
        'name'         => 'Daniel Korostil',
        'locale'       => ['uk'],
        'other_emails' => [],
        'other_names'  => ['Wiseacre']
    ],
    'anizh3gorodov@gmail.com' => [
        'name'         => 'Anton Nizhegorodov',
        'locale'       => ['uk'],
        'other_emails' => [],
        'other_names'  => []
    ],
    'a.polivanchuk@outlook.com' => [
        'name'         => 'Artem Polivanchuk',
        'locale'       => ['uk'],
        'other_emails' => [],
        'other_names'  => []
    ],
    'sergiy.bogdancev@gmail.com' => [
        'name'         => 'Sergiy Bogdancev',
        'locale'       => ['uk'],
        'other_emails' => [],
        'other_names'  => []
    ],
    'huda.sarfraz@gmail.com' => [
        'name'         => 'Huda Sarfraz',
        'locale'       => ['ur'],
        'other_emails' => [],
        'other_names'  => []
    ],
    'loveleeyoungae@yahoo.com' => [
        'name'         => 'NGUYỄN Mạnh Hùng',
        'locale'       => ['vi'],
        'other_emails' => [],
        'other_names'  => ['Hung']
    ],
    'usmaanfaati@yahoo.fr' => [
        'name'         => 'Ousmane Faty NDONGO',
        'locale'       => ['wo'],
        'other_emails' => [],
        'other_names'  => ['Ousmane Faty NDONGO [pootle]']
    ],
    'issasamb@gmail.com' => [
        'name'         => 'Dominique Rochefort',
        'locale'       => ['wo'],
        'other_emails' => [],
        'other_names'  => []
    ],
    'shaohua.wen@gmail.com' => [
        'name'         => 'Shaohua Wen',
        'locale'       => ['zh-CN'],
        'other_emails' => ['holywen@mozilla.org.cn', 'holywen@ubuntu.ubuntu-domain'],
        'other_names'  => []
    ],
    'liuxingmatt@gmail.com' => [
        'name'         => 'Liu Xing',
        'locale'       => ['zh-CN'],
        'other_emails' => ['holywen@mozilla.org.cn', 'holywen@ubuntu.ubuntu-domain'],
        'other_names'  => []
    ],
    'steekid@gmail.com' => [
        'name'         => 'Hao Shen',
        'locale'       => ['zh-CN'],
        'other_emails' => [],
        'other_names'  => ['Jin Jian']
    ],
    'petercpg@mail.moztw.org' => [
        'name'         => 'Peter Pin-Guang Chen',
        'locale'       => ['zh-TW'],
        'other_emails' => [],
        'other_names'  => ['petercpg']
    ],
    'abev66@mail.moztw.org' => [
        'name'         => 'Wei-Chen Lai',
        'locale'       => ['zh-TW'],
        'other_emails' => [],
        'other_names'  => []
    ],
    'timdream@moztw.org' => [
        'name'         => 'Tim Guan-Tin Chien',
        'locale'       => ['zh-TW'],
        'other_emails' => ['tchien@mozilla.com'],
        'other_names'  => []
    ],
    'exclusion@list' => [
        'name'         => '',
        'locale'       => ['zh-TW'],
        'other_emails' => $exclusion_list,
        'other_names'  => []
    ],
];
