<x-layout title="Nova Entrega" icone="bi bi-clipboard2">
    <section id="form">
        <form action="{{ route('deliveries.store') }}" method="POST" class="mb-5">
            @csrf
            <div class="text-center form-group col-12">
                <label for="title" class="form-label text-uppercase fs-7 fst-italic mt-4 pb-2">Titulo da Entrega</label>
                <input type="text" value="{{ old('title') }}" class="form-control col-6 text-center" id="title" name="title" placeholder="Preencha com o Título da Entrega." required>
            </div>

            <div class="text-center form-group col-12">
                <label for="deadline" class="form-label text-uppercase fs-7 fst-italic mt-4 pb-2">Prazo para a Entrega</label>
                <input type="datetime-local" value="{{ old('deadline') }}" class="form-control text-center" id="deadline" name="deadline" required>
            </div>

            <div class="text-center form-group col-12">
                <label for="descript" class="form-label text-uppercase fs-7 fst-italic mt-4 pb-2">Descrição da Entrega</label>
                <input type="text" value="{{ old('descript') }}" class="form-control col-6 text-center" id="descript" name="descript" placeholder="Preencha com a Descrição/Dados da Entrega." required>
            </div>

            <div class="text-center form-group col-12">
                <label for="place" class="form-label text-uppercase fs-7 fst-italic mt-4 pb-2">Local da Entrega</label>
                <input type="text" value="{{ old('place') }}" class="form-control col-6 text-center" id="place" name="place" placeholder="Preencha com o local da Entrega." required>
            </div>
            <div class="row align-items-center justify-content-center">
                <div class="text-center form-group col-4 mt-2">
                    <label for="delivery_men" class="form-label form-label text-uppercase fs-7 fst-italic ">Entregador</label>
                    <select class="text-center form-select form-select-lg" name="delivery_men_id" id="delivery_men">
                        <option value="" selected>Selecione o Entregador</option>
                        @foreach ($deliveries_men as $delivery_man)
                        <option value="{{$delivery_man->id}}">{{ $delivery_man->name }}</option>

                        @endforeach
                    </select>
                </div>
            </div>

            <div class="text-center col-12 mt-5">
                <button class="btn btn-primary" type="submit">Cadastrar Entrega</button>
                <a class="btn btn-secondary" href="/">Voltar para Home</a>
            </div>
        </form>
    </section>
</x-layout>