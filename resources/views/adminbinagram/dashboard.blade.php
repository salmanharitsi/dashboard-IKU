@extends('layouts.app')

@section('title', 'Admin Binagram dashboard')

@section('content')

    <div class="w-full p-5 h-full">
        <h2 class="text-gray-600 font-semibold text-2xl">Daftar IKU</h2>
        <div class="mt-10 bg-white p-5 rounded shadow">
            <ul class="flex flex-col gap-4">
                <li class="">
                    <div class="parent flex items-center gap-5">
                        <i
                            class="fa-solid btn fa-plus cursor-pointer p-2 rounded-md text-gray-800 w-auto h-auto bg-gray-100 hover:bg-gray-200 block"></i>
                        <div
                            class="p-4 rounded-md border-blue-300 border-2 flex justify-between w-full items-center bg-blue-50">
                            <p>Indikator Kinerja Utama</p>
                            <div class="flex gap-4">
                                <i class="fa-solid fa-plus text-green-400 cursor-pointer"></i>
                            </div>
                        </div>
                    </div>
                    <ul class="child hidden ml-[14px] flex flex-col border-orange-300 border-l-2">
                        @foreach ($iku as $tujuan)
                            <li class="ml-7 mt-4">
                                <div class="parent flex items-center gap-5">
                                    <i
                                        class="fa-solid btn fa-plus cursor-pointer p-2 rounded-md text-gray-800 w-auto h-auto bg-gray-100 hover:bg-gray-200 block"></i>
                                    <div
                                        class="p-4 rounded-md border-orange-300 border-2 flex justify-between w-full items-center bg-orange-50">
                                        <p class="block w-[90%] "><span class="">[ TUJUAN ]</span> {{ $tujuan->tujuan }}</p>
                                        <div class="flex gap-4">
                                            <i class="fa-regular fa-pen-to-square text-blue-400 cursor-pointer"></i>
                                            <i class="fa-solid fa-trash text-red-500 cursor-pointer"></i>
                                            <i class="fa-solid fa-plus text-green-400 cursor-pointer"></i>
                                        </div>
                                    </div>
                                </div>
                                <ul class="child hidden ml-[14px] flex flex-col border-green-300 border-l-2">
                                    @foreach ($tujuan->sasaran as $sasaran)
                                        <li class="ml-7 mt-4">
                                            <div class="parent flex items-center gap-5">
                                                <i
                                                    class="fa-solid btn fa-plus cursor-pointer p-2 rounded-md text-gray-800 w-auto h-auto bg-gray-100 hover:bg-gray-200 block"></i>
                                                <div
                                                    class="p-4 rounded-md border-green-300 border-2 flex justify-between w-full items-center bg-green-50">
                                                    <p class="block w-[90%] "><span class="">[ SASARAN ]</span> {{ $sasaran->sasaran }}
                                                    </p>
                                                    <div class="flex gap-4">
                                                        <i
                                                            class="fa-regular fa-pen-to-square text-blue-400 cursor-pointer"></i>
                                                        <i class="fa-solid fa-trash text-red-500 cursor-pointer"></i>
                                                        <i class="fa-solid fa-plus text-green-400 cursor-pointer"></i>
                                                    </div>
                                                </div>
                                            </div>
                                            <ul class="child hidden ml-[14px] flex flex-col border-yellow-300 border-l-2">
                                                @foreach ($sasaran->indikator as $indikator)
                                                    <li class="ml-7 mt-4">
                                                        <div class="parent flex items-center gap-5">
                                                            <i
                                                                class="fa-solid btn fa-plus cursor-pointer p-2 rounded-md text-gray-800 w-auto h-auto bg-gray-100 hover:bg-gray-200 block"></i>
                                                            <div
                                                                class="p-4 rounded-md border-yellow-300 border-2 flex justify-between w-full items-center bg-yellow-50">
                                                                <p class="block w-[90%] "><span class="">[ INDIKATOR ]</span>
                                                                    {{ $indikator->indikator }}</p>
                                                                <div class="flex gap-4">
                                                                    <i
                                                                        class="fa-regular fa-pen-to-square text-blue-400 cursor-pointer"></i>
                                                                    <i
                                                                        class="fa-solid fa-trash text-red-500 cursor-pointer"></i>
                                                                    <i
                                                                        class="fa-solid fa-plus text-green-400 cursor-pointer"></i>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        @if ($indikator->indikator_penunjang()->exists())
                                                            <ul
                                                                class="child hidden ml-[14px] flex flex-col gap-4 border-purple-300 border-l-2">
                                                                @foreach ($indikator->indikator_penunjang as $indikator_penunjang)
                                                                    <li class="ml-7 mt-4">
                                                                        <div class="parent flex items-center gap-5">
                                                                            <i
                                                                                class="fa-solid btn fa-plus cursor-pointer p-2 rounded-md text-gray-800 w-auto h-auto bg-gray-100 hover:bg-gray-200 block"></i>
                                                                            <div
                                                                                class="p-4 rounded-md border-purple-300 border-2 flex justify-between w-full items-center bg-purple-50">
                                                                                <p class="block w-[90%] "><span class="">[ INDIKATOR
                                                                                        PENUNJANG
                                                                                        ]</span>
                                                                                    {{ $indikator_penunjang->indikator_penunjang }}
                                                                                </p>
                                                                                <div class="flex gap-4">
                                                                                    <i
                                                                                        class="fa-regular fa-pen-to-square text-blue-400 cursor-pointer"></i>
                                                                                    <i
                                                                                        class="fa-solid fa-trash text-red-500 cursor-pointer"></i>
                                                                                    <i
                                                                                        class="fa-solid fa-plus text-green-400 cursor-pointer"></i>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <ul
                                                                            class="child hidden ml-[14px] flex flex-col gap-4 border-cyan-300 border-l-2">
                                                                            @foreach ($indikator_penunjang->sub_indikator as $sub_indikator)
                                                                                <li class="ml-16 mt-4">
                                                                                    <div
                                                                                        class="parent flex items-center gap-5">
                                                                                        <div
                                                                                            class="p-4 rounded-md border-cyan-300 border-2 flex justify-between w-full items-center bg-cyan-50">
                                                                                            <p class="block w-[90%] "><span class="">[ SUB
                                                                                                    INDIKATOR ]</span>
                                                                                                {{ $sub_indikator->sub_indikator }}
                                                                                            </p>
                                                                                            <div class="flex gap-4">
                                                                                                <i
                                                                                                    class="fa-regular fa-pen-to-square text-blue-400 cursor-pointer"></i>
                                                                                                <i
                                                                                                    class="fa-solid fa-trash text-red-500 cursor-pointer"></i>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </li>
                                                                            @endforeach
                                                                        </ul>
                                                                    </li>
                                                                @endforeach
                                                            </ul>
                                                        @else
                                                            <ul
                                                                class="child hidden ml-[14px] flex flex-col gap-4 border-cyan-300 border-l-2">
                                                                @foreach ($indikator->sub_indikator as $sub_indikator)
                                                                    <li class="ml-16 mt-4">
                                                                        <div class="parent flex items-center gap-5">
                                                                            <div
                                                                                class="p-4 rounded-md border-cyan-300 border-2 flex justify-between w-full items-center bg-cyan-50">
                                                                                <p class="block w-[90%] "><span class="">[ SUB INDIKATOR
                                                                                        ]</span>
                                                                                    {{ $sub_indikator->sub_indikator }}</p>
                                                                                <div class="flex gap-4">
                                                                                    <i
                                                                                        class="fa-regular fa-pen-to-square text-blue-400 cursor-pointer"></i>
                                                                                    <i
                                                                                        class="fa-solid fa-trash text-red-500 cursor-pointer"></i>
                                                                                    <i
                                                                                        class="fa-solid fa-plus text-green-400 cursor-pointer"></i>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </li>
                                                                @endforeach
                                                            </ul>
                                                        @endif
                                                    </li>
                                                @endforeach
                                            </ul>
                                        </li>
                                    @endforeach
                                </ul>
                            </li>
                        @endforeach
                    </ul>
                </li>
                <li class="">
                    <div class="parent flex items-center gap-5">
                        <i
                            class="fa-solid btn fa-plus cursor-pointer p-2 rounded-md text-gray-800 w-auto h-auto bg-gray-100 hover:bg-gray-200 block"></i>
                        <div
                            class="p-4 rounded-md border-blue-300 border-2 flex justify-between w-full items-center bg-blue-50">
                            <p>Indikator Kinerja Utama Suplemen</p>
                            <div class="flex gap-4">
                                <i class="fa-solid fa-plus text-green-400 cursor-pointer"></i>
                            </div>
                        </div>
                    </div>
                    <ul class="child hidden ml-[14px] flex flex-col border-orange-300 border-l-2">
                        @foreach ($iku_sup as $tujuan)
                            <li class="ml-7 mt-4">
                                <div class="parent flex items-center gap-5">
                                    <i
                                        class="fa-solid btn fa-plus cursor-pointer p-2 rounded-md text-gray-800 w-auto h-auto bg-gray-100 hover:bg-gray-200 block"></i>
                                    <div
                                        class="p-4 rounded-md border-orange-300 border-2 flex justify-between w-full items-center bg-orange-100">
                                        <p class="block w-[90%] "><span class="">[ TUJUAN ]</span> {{ $tujuan->tujuan }}</p>
                                        <div class="flex gap-4">
                                            <i class="fa-regular fa-pen-to-square text-blue-400 cursor-pointer"></i>
                                            <i class="fa-solid fa-trash text-red-500 cursor-pointer"></i>
                                            <i class="fa-solid fa-plus text-green-400 cursor-pointer"></i>
                                        </div>
                                    </div>
                                </div>
                                <ul class="child hidden ml-[14px] flex flex-col border-green-300 border-l-2">
                                    @foreach ($tujuan->sasaran as $sasaran)
                                        <li class="ml-7 mt-4">
                                            <div class="parent flex items-center gap-5">
                                                <i
                                                    class="fa-solid btn fa-plus cursor-pointer p-2 rounded-md text-gray-800 w-auto h-auto bg-gray-100 hover:bg-gray-200 block"></i>
                                                <div
                                                    class="p-4 rounded-md border-green-300 border-2 flex justify-between w-full items-center bg-green-50">
                                                    <p class="block w-[90%] "><span class="">[ SASARAN ]</span> {{ $sasaran->sasaran }}
                                                    <div class="flex gap-4">
                                                        <i
                                                            class="fa-regular fa-pen-to-square text-blue-400 cursor-pointer"></i>
                                                        <i class="fa-solid fa-trash text-red-500 cursor-pointer"></i>
                                                        <i class="fa-solid fa-plus text-green-400 cursor-pointer"></i>
                                                    </div>
                                                </div>
                                            </div>
                                            <ul class="child hidden ml-[14px] flex flex-col border-yellow-300 border-l-2">
                                                @foreach ($sasaran->indikator as $indikator)
                                                    <li class="ml-16 mt-4">
                                                        <div class="parent flex items-center gap-5">
                                                            <div
                                                                class="p-4 rounded-md border-yellow-300 border-2 flex justify-between w-full items-center bg-yellow-50">
                                                                <p class="block w-[90%] "><span class="">[ INDIKATOR ]</span>
                                                                    {{ $indikator->indikator }}</p>
                                                                <div class="flex gap-4">
                                                                    <i
                                                                        class="fa-regular fa-pen-to-square text-blue-400 cursor-pointer"></i>
                                                                    <i
                                                                        class="fa-solid fa-trash text-red-500 cursor-pointer"></i>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </li>
                                                @endforeach
                                            </ul>
                                        </li>
                                    @endforeach
                                </ul>
                            </li>
                        @endforeach
                    </ul>
                </li>
            </ul>
        </div>
    @endsection
