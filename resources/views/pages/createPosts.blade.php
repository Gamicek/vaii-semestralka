@extends('layouts.master')
@section('page-title', 'Posts')

@section('page-content')

    <section>
        @include('include.header')
    </section>

    <section class="my-24">

        <h2 class="mb-8 text-center text-6xl">
            Create posts
        </h2>



        <div class="m-auto block w-4/5 object-center pt-20 text-center">

            <div class="err create mb-2 rounded-md bg-red-600 text-center text-2xl text-white">
                <p></p>
            </div>
            <form action="{{ route('fe-pages.posts.store') }}" method="POST" enctype="multipart/form-data" class="create_form">
                @csrf
                <p>
                    @if ($errors->any())
                        <div class="mb-8 w-full rounded-md bg-rose-600">
                            <h2
                                class="error-wrapper-heading rounded-t-md bg-rose-800 py-2 px-3 text-xl font-bold text-white">
                                Form is filled wrong</h2>
                            <ul class="error-wrapper-list ml-6 list-disc px-3 pt-2 pb-3 text-white">
                                @foreach ($errors->all() as $error)
                                    <li>
                                        <p class="text-white">{{ $error }}</p>
                                    </li>
                                @endforeach
                            </ul>
                        </div>
                    @endif
                </p>

                <div class="flex items-stretch justify-items-stretch gap-8">
                    <div class="w-2/3">
                        <div class="mt-8 w-full first:mt-0">
                            <label class="mb-1 block w-full text-left text-xl font-bold text-gray-800"
                                for="title-input-el">Title</label>
                            <input type="text" name="title" placeholder="Enter title" id="title-input-el"
                                class="createTitle block w-full rounded-md border-4 border-transparent bg-gray-200 px-3 py-2 text-xl text-gray-900 outline-none transition duration-300 focus:border-blue-500">
                        </div>
                        <div class="mt-8 w-full first:mt-0">
                            <label class="mb-1 block w-full text-left text-xl font-bold text-gray-800"
                                for="description-input-el">Description</label>
                            <textarea name="description" placeholder="Enter description" rows="10" id="description-input-el"
                                class="createDescription block w-full rounded-md border-4 border-transparent bg-gray-200 px-3 py-2 text-xl outline-none transition duration-300 focus:border-blue-500"></textarea>
                        </div>

                    </div>
                    <div class="w-1/3">
                        <label for="file-input-el"
                            class="group relative flex h-full w-full cursor-pointer items-center justify-center rounded-lg border-4 border-dashed border-gray-600/50 bg-gray-100 px-2 py-3 uppercase tracking-wide shadow-lg transition duration-300 hover:border-blue-500 hover:bg-blue-100">
                            <span
                                class="text-2xl font-bold leading-normal text-gray-600 transition duration-300 group-hover:text-blue-800">
                                Select a file
                            </span>
                            <input type="file" id="file-input-el" name="image"
                                class="createImage absolute left-0 top-0 h-full w-full cursor-pointer opacity-0">
                        </label>
                    </div>
                </div>

                <div class="mt-16">

                    <button type="submit"
                        class="mt-15 rounded-3xl bg-blue-500 py-4 px-8 text-lg font-bold uppercase text-gray-50 hover:bg-blue-800">
                        Submit post
                    </button>
                </div>
            </form>

        </div>

    </section>

@section('scripts')
    @vite(['resources/js/checkCreate.js'])
@endsection

@include('include.footer')
@endsection
