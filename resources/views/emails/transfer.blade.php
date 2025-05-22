@component('mail::message')
# Transfer Pemain Baru

Detail:

- **Nama Pemain:** {{ $person->name }}
- **Posisi:** {{ $person->nama_panggilan }}
- **Nomor:** {{ $person->nim }}
- **Klub Baru:** {{ $person->email }}

@endcomponent
