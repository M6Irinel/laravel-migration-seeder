<section class="py-6">
    <div class="container">
        <ul class="list-style-none">
            @foreach ($trains as $train)
                <li>
                    <table class="w-100 mb-6 bg-blue-1 scale-H transition-transform duration-2 rounded-5 shadow-b-2-dark">
                        <thead>
                            <tr class="border-b">
                                <th class="gray-8">Azzienda :</th>
                                <th class="border-r">{{ $train['azienda'] }}</th>

                                <th class="gray-8">In orrario :</th>
                                <th class="border-r"><strong>{{$train['in_orario'] ? 'SI' : 'NO'}}</strong></th>

                                <th class="gray-8">Cancellazione :</th>
                                <th><strong>{{$train['cancellato'] ? 'SI' : '--'}}</strong></tr>
                        </thead>

                        <tbody>
                            <tr class="border-b">
                                <td class="pl-2">Stazione di partenza :</td>
                                <td class="border-r" colspan="2"><strong>{{ $train['stazione_di_partenza'] }}</strong>
                                </td>

                                <td class="pl-2">Alle ore :</td>
                                <td colspan="2"><strong>{{ $train['orario_di_partenza'] }}</strong></td>
                            </tr>

                            <tr class="border-b">
                                <td class="pl-2">Stazione di arrivo :</td>
                                <td class="border-r" colspan="2"><strong>{{ $train['stazione_di_arrivo'] }}</strong>
                                </td>

                                <td class="pl-2">Alle ore :</td>
                                <td colspan="2"><strong>{{ $train['orario_di_arrivo'] }}</strong></td>
                            </tr>

                            <tr>
                                <td>Codice treno :</td>
                                <td class="border-r" colspan="2"><strong>{{ $train['codice_treno'] }}</strong></td>

                                <td>Numero carrozze :</td>
                                <td><strong>{{ $train['numero_carrozze'] }}</strong></td>
                            </tr>
                        </tbody>
                    </table>
                </li>
            @endforeach
        </ul>
    </div>
</section>
