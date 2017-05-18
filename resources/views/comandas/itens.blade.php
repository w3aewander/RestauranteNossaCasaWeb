<tr>
    <td style="text-align: center;">{{$dado->nome}}</td>
    <td style="text-align: center;">{{$dado->unidade_id}}</td>
    <td style="text-align: center;">{{$dado->qtde}}</td>
    <td style="text-align: right;">{{number_format($dado->valor_unitario,2)}}</td>
    <td style="text-align: right;">{{number_format( $dado->qtde * $dado->valor_unitario, 2)}}</td>        
</tr>

