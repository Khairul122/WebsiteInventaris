@extends('layout/v_template_dashboard')

@section('title', 'Dashboard')


@section('dashboard')

    <div class="page-inner mt--5" style="padding-top: 20px">
        <center>
            <img src="{{ asset('gambar') }}/logo aceh.png" width="120px">
            <br>
            <b style="font-size: 40px">DINAS PERTANIAN DAN PANGAN KABUPATEN ACEH UTARA</b>
        </center>
    </div>
    <div class="card-category">
        <center>
            <a style="font-size: 20px;"
                href="https://www.google.com/maps?q=alamat+dinas+pertanian+kabupaten+aceh+utara&um=1&ie=UTF-8&sa=X&ved=2ahUKEwjtz8PKuvP6AhVA4nMBHb65Dj8Q_AUoAXoECAIQAw">
                JL. Samudra, No. 07 A, Kp. Jawa Lama, Kec. Banda Sakti, Kota Lhokseumawe, Aceh
            </a>
        </center>
    </div>
@endsection
