@extends('layouts.app')

@section('title')
engine
@endsection

@section('content')
<h1 class="mx-[300px] mt-10 text-4xl">engine page</h1>
    <div class="mt-10">
        <div class="mx-[340px]">
            <a href="{{ route('engine.create') }}">Add engine</a>
        </div>
        <table class="mx-[300px]">
            <thead class="">
                <tr class="border-collapse border border-slate-500 text-center text-2xl">
                    <th>Engine ID</th>
                    <th>Engine Type</th>
                    <th>Engine Image</th>
                    <th>Engine Detail</th>
                    <th>Engine HP</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ( $engines as $item )
                <tr class="border-collapse border border-slate-500 text-center">
                    <td>{{ $item->id }}</td>
                    <td>{{ $item->e_type }}</td>
                    <td>{{ $item->e_img }}</td>
                    <td>{{ $item->e_detail }}</td>
                    <td>{{ $item->e_hp }}</td>
                    <td>
                        <form action="{{ route('engine.destroy',$item->id) }}" method="Post">
                        <a class="btn btn-primary" href="{{ route('engine.edit',$item->id) }}">Edit</a>
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger text-red-500">Delete</button>
                        </form>
                    </td>
                </tr>
            </tbody>
            @endforeach
        </table>
    </div>
@endsection
