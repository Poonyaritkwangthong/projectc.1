@extends('layouts.app')

@section('title')
Brand
@endsection

@section('content')
<h1 class="mx-[300px] mt-10 text-4xl">brand page</h1>
    <div class="mt-10">
        <div class="mx-[340px]">
            <a href="{{ route('brand.create') }}">Add Brand</a>
        </div>
        <table class="mx-[300px]">
            <thead class="">
                <tr class="border-collapse border border-slate-500 text-center text-2xl">
                    <th>Brand ID</th>
                    <th>Brand Name</th>
                    <th>Brand Location</th>
                    <th>Founded Year</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ( $brands as $item )
                <tr class="border-collapse border border-slate-500 text-center">
                    <td>{{ $item->id }}</td>
                    <td>{{ $item->b_name }}</td>
                    <td>{{ $item->b_location }}</td>
                    <td>{{ $item->founded_year }}</td>
                    <td>
                        <form action="{{ route('brand.destroy',$item->id) }}" method="Post">
                        <a class="btn btn-primary" href="{{ route('brand.edit',$item->id) }}">Edit</a>
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
