<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link href='{{ asset('assets/logo.jpg') }}' rel="shortcut icon">
    <title>STRUKTUR KEPENGURUSAN</title>
</head>
<body>
    @include('landing.layouts.header')

    <br>
    <div class="container text text-center">
        <img src="{{ asset('uploads/kepengurusan/'.$kepengurusan->img.'') }}" class="img-fluid" alt="Responsive image" width="850px">
    </div>

    <footer class="bg-success py-5 mt-5">
        <div class="container text-light text-center">
            <p class="display-10 mb-1">PANTI ASUHAN AL-KHAIRIYAH </p>
            <a href="https://www.facebook.com/m.husni.779857?rdid=VD1ipJ1goIRoPDqv&share_url=https%3A%2F%2Fwww.facebook.com%2Fshare%2F129frADCgf2%2F#" class="btn btn-success" role="button">Facebook</a>
            {{-- <a href="https://www.bing.com/search?pglt=169&q=BUTTON+ICON+BOOTSTRAP&cvid=e53828f686d442009f70ec6f29fcc07f&gs_lcrp=EgZjaHJvbWUyBggAEEUYOTIGCAEQABhAMgYIAhAAGEDSAQg4MjQ0ajBqMagCALACAA&FORM=ANNTA1&PC=HCTS" class="btn btn-success" role="button">Twitter</a> --}}
            <a href="https://www.bing.com/search?pglt=169&q=BUTTON+ICON+BOOTSTRAP&cvid=e53828f686d442009f70ec6f29fcc07f&gs_lcrp=EgZjaHJvbWUyBggAEEUYOTIGCAEQABhAMgYIAhAAGEDSAQg4MjQ0ajBqMagCALACAA&FORM=ANNTA1&PC=HCTS" class="btn btn-success" role="button">Instagram</a>
            <a href="https://wa.me/6283894333872" class="btn btn-success" role="button">Whatsapp</a>
            <br>
            <small class="text-white">Hak Cipta &COPY; {{ date('Y') }} PANTI ASUHAN AL-KHAIRIYAH. ALL RIGHT RESERVED.</small>
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
</body>
</html>
