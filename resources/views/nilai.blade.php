@php
    $nama = "zahra";
    $nilai = 90;
@endphp
@if ($nilai > 60)
    @php
        $ket = "lulus";
    @endphp
@else
    @php
        $ket = "gagal";
    @endphp
@endif

Mahasiswa {{ $nama }} dengan nilai {{ $nilai }} dinyatakan {{ $ket }}