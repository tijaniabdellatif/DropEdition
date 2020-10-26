@extends('layouts.app')

@section('content')


<h1 class="display-4 test">Cases of Stocks : Amazone,Google,Microsoft Corp</h1>
<table id="example" class="table table-striped table-bordered" style="width:90%">
        <thead>
            <tr>
                <th>Symbole</th>
                <th>Open</th>
                <th>High</th>
                <th>Low</th>
                <th>Close</th>
                <th>Date</th>
                <th>Volume</th>
            </tr>
        </thead>
        <tbody>
            
            <tr> 
                  @if(count($source)===0)
                  <td>No data to display for 4 January 2020</td>
                  @else
                @foreach ($source as $item)
                @if($item['symbol']==="AMZN")
                <td>{{$item['symbol']}}</td>
             <td>{{$item['open']}}</td>
              <td>{{$item['high']}}</td>
              <td>{{$item['low']}}</td>
              <td>{{$item['close']}}</td>
              <td>{{date('j F Y',strtotime($item['date']))}}</td>
              <td>{{$item['volume']}}</td>
            </tr>
              @elseif($item['symbol']==="GOOGL")
              <tr>
               <td>{{$item['symbol']}}</td>
             <td>{{$item['open']}}</td>
              <td>{{$item['high']}}</td>
              <td>{{$item['low']}}</td>
              <td>{{$item['close']}}</td>
              <td>{{date('j F Y',strtotime($item['date']))}}</td>
              <td>{{$item['volume']}}</td>

               </tr>
              @elseif($item['symbol']==="MSFT")
              <tr>
               <td>{{$item['symbol']}}</td>
             <td>{{$item['open']}}</td>
              <td>{{$item['high']}}</td>
              <td>{{$item['low']}}</td>
              <td>{{$item['close']}}</td>
              <td>{{date('j F Y',strtotime($item['date']))}}</td>
              <td>{{$item['volume']}}</td>
            @else 
                 <p>No Data to Display</p>
            @endif
               @endforeach
               @endif
            </tr>
            </tbody>
        <tfoot>
            <tr>
                <th>Symbole</th>
                <th>Open</th>
                <th>High</th>
                <th>Low</th>
                <th>Close</th>
                <th>Date</th>
                <th>Volume</th>
            </tr>
        </tfoot>
    </table>
@endsection
