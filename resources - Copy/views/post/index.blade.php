@extends('layouts.master')

@section('content')
<thead>
		<tr>
				<th>S.No</th>
				<th>الصنف</th>
                <th>السعر</th>
          <th>توفيق</th>
                         <th>مهدي </th>
                 <th>رمضان </th>
                                <th>سعد</th>
                                <th>سامي</th>
                                <th>شريف</th>
                                <th>ايمان</th>
                                <th>الاء</th>
                                <th></th>
                                <th></th>
                                <th>السعر </th>
                                <th>Actions</th>
		</tr>
		
</thead>

<tbody>

		@foreach($posts as $Post)
				<tr><td>{{ $loop->index + 1 }}</td>
						<td>{{$Post->title}}</td>
						<td>{{substr($Post->content,0,25)}}
								@if(strlen($Post->content)>25)
								[..]
								@endif
				</td>
				<td class="text-center"><input type="checkbox" class="published" data-id="{{$Post->id}}" @if ($Post->is_published) checked @endif></td>
				<td class="text-center"><input type="checkbox" class="published2" data-id="{{$Post->id}}" @if ($Post->is_published2) checked @endif></td>
                <td class="text-center"><input type="checkbox" class="published3" data-id="{{$Post->id}}" @if ($Post->is_published3) checked @endif></td>
                <td class="text-center"><input type="checkbox" class="published4" data-id="{{$Post->id}}" @if ($Post->is_published4) checked @endif></td>
                <td class="text-center"><input type="checkbox" class="published5" data-id="{{$Post->id}}" @if ($Post->is_published5) checked @endif></td>
                <td class="text-center"><input type="checkbox" class="published6" data-id="{{$Post->id}}" @if ($Post->is_published6) checked @endif></td>
                <td class="text-center"><input type="checkbox" class="published7" data-id="{{$Post->id}}" @if ($Post->is_published7) checked @endif></td>
                <td class="text-center"><input type="checkbox" class="published8" data-id="{{$Post->id}}" @if ($Post->is_published8) checked @endif></td>
                <td class="text-center"><input type="checkbox" class="published9" data-id="{{$Post->id}}" @if ($Post->is_published9) checked @endif></td>
                <td class="text-center"><input type="checkbox" class="published10" data-id="{{$Post->id}}" @if ($Post->is_published10) checked @endif></td>
		
<td>{{ substr($Post->item,0,4) }}</td> 
						<td>
								<button class="btn btn-info" data-mytitle="{{$Post->title}}" data-mycontent="{{$Post->content}}" data-myid={{$Post->id}} data-toggle="modal" data-target="#edit">Edit</button>
								
								<button class="btn btn-danger" data-myid={{$Post->id}} data-toggle="modal" data-target="#delete">Delete</button>
						</td>
				</tr>

@endforeach
		
</tbody>
<tfoot>
		<tr>
						<th>S.No</th>
						<th>الصنف</th>
                            @foreach($counts as $count)
                        <th>{{$count->sum}}</th>
                        @endforeach
                        @foreach($is_publisheds as $is_published)
                        <th>{{ substr($is_published->is_published_sum,0,4)  }}</th>
                        @endforeach
                        @foreach($is_published2s as $is_published2)
                        <th>{{ substr($is_published2->is_published_sum,0,4)  }}</th>
                        @endforeach
                        @foreach($is_published3s as $is_published3)
                        <th>{{ substr($is_published3->is_published_sum,0,4)  }}</th>
                        @endforeach
                        @foreach($is_published4s as $is_published4)
                        <th>{{ substr($is_published4->is_published_sum,0,4)  }}</th>
                        @endforeach
                        @foreach($is_published5s as $is_published5)
                        <th>{{ substr($is_published5->is_published_sum,0,4)  }}</th>
                        @endforeach
                        @foreach($is_published6s as $is_published6)
                        <th>{{ substr($is_published6->is_published_sum,0,4)  }}</th>
                        @endforeach
                        @foreach($is_published7s as $is_published7)
                        <th>{{ substr($is_published7->is_published_sum,0,4)  }}</th>
                        @endforeach
                        @foreach($is_published8s as $is_published8)
                        <th>{{ substr($is_published8->is_published_sum,0,4)  }}</th>
                        @endforeach
                        @foreach($is_published9s as $is_published9)
                        <th>{{ substr($is_published9->is_published_sum,0,4)  }}</th>
                        @endforeach
                        @foreach($is_published10s as $is_published10)
                        <th>{{ substr($is_published10->is_published_sum,0,4)  }}</th>
                        @endforeach
                            <th> </th>
                            <th>Actions</th>
		</tr>
@endsection
@section('model')
@include('post.model')
@endsection
@section('ajax')
@include('post.ajax')
@endsection