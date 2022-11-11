<x-layout title="Novo Entregador" icone="bi bi-clipboard2">
    <section id="form">
        <form action="{{ route('deliverymens.store') }}" method="POST" class="mb-5">
            @csrf
            <div class="container form-group">
                <div class="row">
                    <div class="col-9 text-center ms-4">
                        <label for="name" class="form-label text-uppercase fs-7 fst-italic mt-4 pb-2">Nome Completo</label>
                        <input type="name" value="{{ old('name') }}" class="form-control col-6 text-center" id="name" name="name" placeholder="Preencha com o Nome do Entregador." required>
                    </div>

                    <div class="col-2">
                        <label for="age" class="form-label text-uppercase fs-7 fst-italic mt-4 pb-2">Idade</label>
                        <input type="age" value="{{ old('age') }}" class="form-control col-6 text-center" id="age" name="age" placeholder="XX" required>
                    </div>
                </div>
            </div>

            <div class="text-center form-group col-12  ">
                <label for="adress" class="form-label text-uppercase fs-7 fst-italic mt-4 pb-2">Endereço do Entregador</label>
                <input type="text" value="{{ old('adress') }}" class="form-control text-center" id="adress" name="adress" placeholder="Preencha com o Endereço do Entregador." required>
            </div>

            <div class="text-center form-group col-12">
                <label for="vehicle" class="form-label text-uppercase fs-7 fst-italic mt-4 pb-2">Veículo do Entregador</label>
                <input type="vehicle" value="{{ old('vehicle') }}" class="form-control col-6 text-center" id="vehicle" name="vehicle" placeholder="Preencha com os dados do Veículo do Entregador." required>
            </div>

            <div class="text-center col-12 mt-5">
                <button class="btn btn-primary" type="submit">Cadastrar Entregador</button>
                <a class="btn btn-secondary" href="/">Voltar para Home</a>
            </div>
        </form>
    </section>
</x-layout>