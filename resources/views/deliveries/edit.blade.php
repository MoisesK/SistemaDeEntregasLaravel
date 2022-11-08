<x-layout title="Edição de Entrega" icone="bi bi-clipboard2">
    <section id="form">
        <form action="{{ route('deliveries.update', $delivery->id) }}" method="POST" class="mb-5">
            @csrf
            @if($update)
            @method('PUT')
            @endif
            <div class="text-center form-group col-12">
                <label for="title" class="form-label text-uppercase fs-7 fst-italic mt-4 pb-2">Titulo da Entrega</label>
                <input type="text" value="{{$delivery->title}}" class="form-control col-6 text-center" id="title" name="title" required>
            </div>

            <div class="text-center form-group col-12">
                <label for="deadline" class="form-label text-uppercase fs-7 fst-italic mt-4 pb-2">Prazo para a Entrega</label>
                <input type="datetime-local" value="{{$delivery->deadline}}" class="form-control text-center" id="deadline" name="deadline" required>
            </div>

            <div class="text-center form-group col-12">
                <label for="descript" class="form-label text-uppercase fs-7 fst-italic mt-4 pb-2">Descrição da Entrega</label>
                <input type="text" value="{{$delivery->descript}}" class="form-control col-6 text-center" id="descript" name="descript" placeholder="Preencha com a Descrição/Dados da Entrega." required>
            </div>

            <div class="text-center form-group col-12">
                <label for="place" class="form-label text-uppercase fs-7 fst-italic mt-4 pb-2">Local da Entrega</label>
                <input type="text" value="{{$delivery->place}}" class="form-control col-6 text-center" id="place" name="place" placeholder="Preencha com o local da Entrega." required>
            </div>

            <div class="text-center form-group col-12">
                <label for="stats" class="form-label">Status da Entrega</label>
                <select class="form-select form-select-lg" name="stats" id="stats">
                    <option value="{{$delivery->stats}}" selected>{{$delivery->stats}}</option>
                    <option value="Concluído">Concluído</option>
                    <option value="Cancelada">Cancelada</option>
                </select>
            </div>

            <div class="text-center col-12 mt-5">
                <button class="btn btn-primary" type="submit">Salvar Entrega</button>
                <a class="btn btn-secondary" href="/">Voltar para Home</a>
            </div>
        </form>
    </section>
</x-layout>