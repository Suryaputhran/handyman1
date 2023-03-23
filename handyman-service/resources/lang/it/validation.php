<?php 
return [
  'accepted' => 'La :attribute deve essere accettata.',
  'active_url' => ' :attribute non è un URL valido.',
  'after' => 'La :attribute deve essere una data dopo :date.',
  'after_or_equal' => 'La :attribute deve essere una data dopo o uguale a :date.',
  'alpha' => 'L\' :attribute deve contenere solo lettere.',
  'alpha_dash' => 'La :attribute deve contenere solo lettere, numeri, trattini e sottolineature.',
  'alpha_num' => 'L\' :attribute deve contenere solo lettere e numeri.',
  'array' => 'La :attribute deve essere un array.',
  'before' => 'La :attribute deve essere una data prima della :date.',
  'before_or_equal' => 'La :attribute deve essere una data prima o uguale a :date.',
  'between' => [
    'numeric' => 'La :attribute deve essere tra :min e :max.',
    'file' => 'La :attribute deve essere tra :min e :max Kilobytes.',
    'string' => 'La :attribute deve essere tra caratteri :min e :max.',
    'array' => 'L\' :attribute deve avere tra gli elementi :min e :max.',
  ],
  'boolean' => 'Il campo :attribute deve essere vero o falso.',
  'confirmed' => 'La conferma :attribute non corrisponde.',
  'date' => 'La :attribute non è una data valida.',
  'date_equals' => 'La :attribute deve essere una data uguale a :date.',
  'date_format' => 'La :attribute non corrisponde al formato :format.',
  'different' => 'L\' :attribute e :other devono essere diversi.',
  'digits' => 'La :attribute deve essere :digits cifre.',
  'digits_between' => 'La :attribute deve essere tra le cifre :min e :max.',
  'dimensions' => 'La :attribute ha dimensioni dell\'immagine non valide.',
  'distinct' => 'Il campo :attribute ha un valore duplicato.',
  'email' => 'La :attribute deve essere un indirizzo email valido.',
  'ends_with' => 'La :attribute deve terminare con una delle seguenti operazioni: :values.',
  'exists' => 'L\' :attribute selezionato non è valido.',
  'file' => 'L\' :attribute deve essere un file.',
  'filled' => 'Il campo :attribute deve avere un valore.',
  'gt' => [
    'numeric' => 'La :attribute deve essere maggiore di :value.',
    'file' => 'L\' :attribute deve essere maggiore di :value kilobytes.',
    'string' => 'L\' :attribute deve essere maggiore di :value caratteri.',
    'array' => 'L\' :attribute deve avere più di :value elementi.',
  ],
  'gte' => [
    'numeric' => 'La :attribute deve essere maggiore o uguale :value.',
    'file' => 'La :attribute deve essere maggiore o uguale o uguale a :value kilobytes.',
    'string' => 'La :attribute deve essere maggiore o uguale a :value caratteri.',
    'array' => 'L\' :attribute deve avere :value elementi o più.',
  ],
  'image' => 'La :attribute deve essere un\'immagine.',
  'in' => 'L\' :attribute selezionato non è valido.',
  'in_array' => 'Il campo :attribute non esiste in :other.',
  'integer' => 'L\' :attribute deve essere un numero intero.',
  'ip' => 'L\' :attribute deve essere un indirizzo IP valido.',
  'ipv4' => 'L\' :attribute deve essere un indirizzo IPv4 valido.',
  'ipv6' => 'L\' :attribute deve essere un indirizzo IPv6 valido.',
  'json' => 'La :attribute deve essere una stringa JSON valida.',
  'lt' => [
    'numeric' => 'La :attribute deve essere inferiore a :value.',
    'file' => 'La :attribute deve essere inferiore a :value kilobyte.',
    'string' => ' :attribute deve essere inferiore a :value caratteri.',
    'array' => 'L\' :attribute deve avere meno di :value elementi.',
  ],
  'lte' => [
    'numeric' => 'La :attribute deve essere inferiore o uguale :value.',
    'file' => 'La :attribute deve essere inferiore o uguale o uguale a :value Kilobytes.',
    'string' => 'La :attribute deve essere inferiore o uguale o uguale a caratteri :value.',
    'array' => 'L\' :attribute non deve avere più di :value articoli.',
  ],
  'max' => [
    'numeric' => 'La :attribute non deve essere maggiore di :max.',
    'file' => 'La :attribute non deve essere maggiore di :max Kilobytes.',
    'string' => 'L\' :attribute non deve essere maggiore di :max caratteri.',
    'array' => 'L\' :attribute non deve avere più di :max articoli.',
  ],
  'mimes' => 'L\' :attribute deve essere un file di tipo: :values.',
  'mimetypes' => 'L\' :attribute deve essere un file di tipo: :values.',
  'min' => [
    'numeric' => 'La :attribute deve essere almeno :min.',
    'file' => 'L\' :attribute deve essere almeno :min kilobytes.',
    'string' => 'L\' :attribute deve essere almeno :min caratteri.',
    'array' => 'L\' :attribute deve avere almeno :min articoli.',
  ],
  'multiple_of' => 'L\' :attribute deve essere un multiplo di :value.',
  'not_in' => 'L\' :attribute selezionato non è valido.',
  'not_regex' => 'Il formato :attribute non è valido.',
  'numeric' => 'L\' :attribute deve essere un numero.',
  'password' => 'La password non è corretta.',
  'present' => 'Il campo :attribute deve essere presente.',
  'regex' => 'Il formato :attribute non è valido.',
  'required' => 'Il campo :attribute è richiesto.',
  'required_if' => 'Il campo :attribute è richiesto quando :other è :value.',
  'required_unless' => 'Il campo :attribute è richiesto a meno che :other sia in :values.',
  'required_with' => 'Il campo :attribute è richiesto quando :values è presente.',
  'required_with_all' => 'Il campo :attribute è richiesto quando :values sono presenti.',
  'required_without' => 'Il campo :attribute è richiesto quando :values non è presente.',
  'required_without_all' => 'Il campo :attribute è richiesto quando nessuno di :values è presente.',
  'prohibited' => 'Il campo :attribute è proibito.',
  'prohibited_if' => 'Il campo :attribute è proibito quando :other è :value.',
  'prohibited_unless' => 'Il campo :attribute è proibito a meno che :other sia in :values.',
  'same' => 'L\' :attribute e :other devono corrispondere.',
  'size' => [
    'numeric' => 'La :attribute deve essere :size.',
    'file' => 'L\' :attribute deve essere :size Kilobytes.',
    'string' => 'L\' :attribute deve essere caratteri :size.',
    'array' => 'La :attribute deve contenere :size elementi.',
  ],
  'starts_with' => 'L\' :attribute deve iniziare con una delle seguenti operazioni: :values.',
  'string' => 'La :attribute deve essere una stringa.',
  'timezone' => 'La :attribute deve essere una zona valida.',
  'unique' => 'La :attribute è già stata presa.',
  'uploaded' => ' :attribute non è riuscito a caricare.',
  'url' => 'Il formato :attribute non è valido.',
  'uuid' => 'L\' :attribute deve essere un UUID valido.',
  'custom' => [
    'attribute-name' => [
      'rule-name' => 'messaggio personalizzato',
    ],
  ],
  'attributes' => [
  ],
];