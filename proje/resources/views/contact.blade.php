@extends("layout")
@section('main')
    <h5>iletişim sayfa içeriği</h5>

    @if($errors->any())
        hatalı veri girişi
        <ul>
            @foreach($errors->all() as $error)
                <li>
                    {{$error}}
                </li>
            @endforeach
        </ul>
    @endif

    <h5>iletişim formu</h5>
    <form action="" method="POST">
        @csrf
        isminiz:
        <br/><input type="text" name="isim" value="{{ old('isim') }}"/>
        <br/><br/>
        konu:
        <br/>
        <select name="konu">
            <option value="ogrenci_isleri" {{ old('konu') == 'ogrenci_isleri' ? 'selected' : '' }}>öğrenci işleri</option>
            <option value="sosyal_olanak" {{ old('konu') == 'sosyal_olanak' ? 'selected' : '' }}>sosyal olanaklar</option>
            <option value="diger" {{ old('konu') == 'diger' ? 'selected' : '' }}>diğer</option>

        </select>
        <br/><br/>
        Mesajınız:
        <br/>
        <textarea name="mesaj">{{ old('mesaj') }}</textarea>
        <br/><br/>
        <input type="submit" value="mesajı gönder"/>
    </form>
@endsection



