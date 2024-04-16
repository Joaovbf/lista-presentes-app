<x-guest-layout>
    <h1>{{ $gift->description }}</h1>
    <span class="image main"><img src="{{ asset('image/pic13.jpg') }}" alt="" /></span>
    <div class="content">
        <p>Este presente é de site parceito, clique <a target="_blank" href="{{ $gift->link }}">aqui</a>
            para navegar, fique a vontande se achar em outro site igual no mesmo valor. </p>
        <p>Se preferir mandar diretamente para nossso lar esse é nosso endereço</p>
        <p>Avenida Antônio Almeida Filho n901 apt 402 Paraia de Itaparica, Vila Velha - ES CEP: 29.102-265</p>
    </div>
    <div class="row gtr-uniform">
        <div class="col-12">
            <h2>Deseja confirmar o presente?</h2>
        </div>
        <div class="col-6">
            <input type="text" name="name" placeholder="Nome">
        </div>
        <div class="col-6">
            <input type="number" name="qtdQuotas" placeholder="Quantidade de Cotas" max="10" min="1">
        </div>
        <div class="col-12">
            <input type="text" name="name" placeholder="Nos deixe uma mensagem s2">
        </div>
        <div class="col-12">
            <a href="" class="button primary fit">Confirmar</a>
        </div>
    </div>
</x-guest-layout>
