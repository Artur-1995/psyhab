@extends('main')
@section('title', 'Личный кабинет | PSYHAB - психологическая помощь')
@section('content')

    @if (session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif
    <!-- Вывод общих ошибок -->
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <!-- Вывод ошибок для конкретного поля -->
    @error('firstName')
        <div class="alert alert-danger">
            {{ $message }}
        </div>
    @enderror

    @error('lastName')
        <div class="alert alert-danger">
            {{ $message }}
        </div>
    @enderror

    @error('email')
        <div class="alert alert-danger">
            {{ $message }}
        </div>
    @enderror

    @error('phone')
        <div class="alert alert-danger">
            {{ $message }}
        </div>
    @enderror

    <div class="min-h-screen bg-gray-50 py-8">
        <div class="container mx-auto px-4 max-w-4xl">
            <!-- Навигация вкладок -->
            <div class="flex flex-col gap-2 space-y-6">
                <div id="formsContainer">
                    <div class="outline-none space-y-6 mt-4">
                        <div data-slot="card"
                            class="bg-card text-card-foreground flex flex-col gap-6 rounded-xl border-0 shadow-lg">
                            <div class="border-2 border-blue-500 rounded-lg p-6 space-y-4 bg-gradient-to-br from-blue-50 to-indigo-50"
                                id="newArticleForm">
                                <div class="flex items-center justify-between mb-4">
                                    <h4 data-slot="card-title" class="leading-none flex items-center gap-2"><svg
                                            xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                            viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                            stroke-linecap="round" stroke-linejoin="round"
                                            class="lucide lucide-file-text w-5 h-5" aria-hidden="true">
                                            <path d="M12 20h9"></path>
                                            <path d="M16.5 3.5a2.121 2.121 0 0 1 3 3L7 19l-4 1 1-4L16.5 3.5z"></path>
                                        </svg>Редактирование статьи</h4><button id="closeNewArticleButton"
                                        class="inline-flex items-center justify-center gap-2 whitespace-nowrap rounded-md font-medium transition-all disabled:pointer-events-none disabled:opacity-50 outline-none focus-visible:ring-2 focus-visible:ring-offset-2 bg-transparent hover:bg-gray-100 dark:hover:bg-gray-800 h-8 px-3 text-sm"><svg
                                            xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                            viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                            stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-x w-4 h-4"
                                            aria-hidden="true">
                                            <path d="M18 6 6 18"></path>
                                            <path d="m6 6 12 12"></path>
                                        </svg></button>
                                </div>
                                <form action="{{ route('article.store') }}" method="POST" class="space-y-6">
                                    @csrf
                                    <div class="space-y-2"><label data-slot="label"
                                            class="flex items-center gap-2 text-sm leading-none font-medium select-none group-data-[disabled=true]:pointer-events-none group-data-[disabled=true]:opacity-50 peer-disabled:cursor-not-allowed peer-disabled:opacity-50"
                                            for="new-title">Название*</label><input data-slot="input"
                                            class="file:text-foreground placeholder:text-muted-foreground selection:bg-primary selection:text-primary-foreground dark:bg-input/30 border-input flex h-9 w-full min-w-0 rounded-md border px-3 py-1 text-base bg-input-background transition-[color,box-shadow] outline-none file:inline-flex file:h-7 file:border-0 file:bg-transparent file:text-sm file:font-medium disabled:pointer-events-none disabled:cursor-not-allowed disabled:opacity-50 md:text-sm focus-visible:border-ring focus-visible:ring-ring/50 focus-visible:ring-[3px] aria-invalid:ring-destructive/20 dark:aria-invalid:ring-destructive/40 aria-invalid:border-destructive"
                                            name="title" id="new-title" placeholder="Введите название статьи"
                                            value="{{ $article->title }}"></div>
                                    <div class="space-y-2"><label data-slot="label"
                                            class="flex items-center gap-2 text-sm leading-none font-medium select-none group-data-[disabled=true]:pointer-events-none group-data-[disabled=true]:opacity-50 peer-disabled:cursor-not-allowed peer-disabled:opacity-50"
                                            for="new-excerpt">Описание *</label>
                                        <textarea data-slot="textarea"
                                            class="resize-none border-input placeholder:text-muted-foreground focus-visible:border-ring focus-visible:ring-ring/50 aria-invalid:ring-destructive/20 dark:aria-invalid:ring-destructive/40 aria-invalid:border-destructive dark:bg-input/30 flex field-sizing-content min-h-16 w-full rounded-md border bg-input-background px-3 py-2 text-base transition-[color,box-shadow] outline-none focus-visible:ring-[3px] disabled:cursor-not-allowed disabled:opacity-50 md:text-sm"
                                            name="description" id="new-excerpt" placeholder="Краткое описание статьи для предварительного просмотра"
                                            rows="2">{{ $article->description }}</textarea>
                                    </div>
                                    <style>
                                        h1 {
                                            font-size: 24px;
                                            font-weight: bold;
                                        }

                                        h2 {
                                            font-size: 20px;
                                            font-weight: bold;
                                        }

                                        h7 {
                                            font-size: 10px;
                                            font-weight: bold;
                                        }

                                        #preview {
                                            border: 1px solid #ccc;
                                            padding: 10px;
                                            background-color: #f9f9f9;
                                        }

                                        #preview-content {
                                            margin-top: 10px;
                                        }

                                        img {
                                            max-width: 100%;
                                            height: auto;
                                        }
                                    </style>
                                    <script>
                                        tinymce.init({
                                            selector: '#editor',
                                            plugins: [
                                                // Core editing features
                                                'anchor', 'autolink', 'charmap', 'codesample', 'emoticons', 'link', 'lists', 'media',
                                                'searchreplace', 'table', 'visualblocks', 'wordcount',
                                                // Your account includes a free trial of TinyMCE premium features
                                                // Try the most popular premium features until Dec 5, 2025:
                                                'checklist', 'mediaembed', 'casechange', 'formatpainter', 'pageembed', 'a11ychecker',
                                                'tinymcespellchecker', 'permanentpen', 'powerpaste', 'advtable', 'advcode', 'advtemplate', 'ai',
                                                'uploadcare', 'mentions', 'tinycomments', 'tableofcontents', 'footnotes', 'mergetags',
                                                'autocorrect', 'typography', 'inlinecss', 'markdown', 'importword', 'exportword', 'exportpdf'
                                            ],
                                            toolbar: 'undo redo | blocks fontfamily fontsize | bold italic underline strikethrough | link media table mergetags | addcomment showcomments | spellcheckdialog a11ycheck typography uploadcare | align lineheight | checklist numlist bullist indent outdent | emoticons charmap | removeformat',
                                            tinycomments_mode: 'embedded',
                                            tinycomments_author: 'Author name',
                                            mergetags_list: [{
                                                    value: 'First.Name',
                                                    title: 'First Name'
                                                },
                                                {
                                                    value: 'Email',
                                                    title: 'Email'
                                                },
                                            ],
                                            ai_request: (request, respondWith) => respondWith.string(() => Promise.reject(
                                                'See docs to implement AI Assistant')),
                                            uploadcare_public_key: '8rttph96vcczfbri8abdbi6muo8y6gsbmnaud12bebm3g1c5',
                                        }).then(editor => {
                                            editor.model.document.on('change:data', () => {
                                                const content = editor.getData();
                                                document.getElementById('preview-content').innerHTML = content;
                                            });
                                        });
                                    </script>

                                    <div class="space-y-2">
                                        <label data-slot="label"
                                            class="flex items-center gap-2 text-sm leading-none font-medium select-none group-data-[disabled=true]:pointer-events-none group-data-[disabled=true]:opacity-50 peer-disabled:cursor-not-allowed peer-disabled:opacity-50"
                                            for="content">Текст *</label>
                                        <textarea data-slot="textarea" name="content"
                                            class="resize-none border-input placeholder:text-muted-foreground focus-visible:border-ring focus-visible:ring-ring/50 aria-invalid:ring-destructive/20 dark:aria-invalid:ring-destructive/40 aria-invalid:border-destructive dark:bg-input/30 flex field-sizing-content min-h-16 w-full rounded-md border bg-input-background px-3 py-2 text-base transition-[color,box-shadow] outline-none focus-visible:ring-[3px] disabled:cursor-not-allowed disabled:opacity-50 md:text-sm"
                                            id="editor" placeholder="Введите текст вашей статьи" rows="8"> {{ $article->content }}</textarea>
                                    </div>
                                    <div class="grid md:grid-cols-2 gap-4">
                                        <div class="space-y-2">
                                            <label data-slot="label"
                                                class="flex items-center gap-2 text-sm leading-none font-medium select-none group-data-[disabled=true]:pointer-events-none group-data-[disabled=true]:opacity-50 peer-disabled:cursor-not-allowed peer-disabled:opacity-50"
                                                for="category">Категория *</label>
                                            <select id="category" name="category"
                                                class="w-full border border-gray-300 rounded-md px-3 py-2 focus:outline-none focus:ring-2 focus:ring-blue-500">
                                                <option value="" @if (old('category', $article->category) === '') selected @endif>
                                                    Выберите категорию</option>
                                                <option value="Тревожность"
                                                    @if (old('category', $article->category) === 'Тревожность') selected @endif>Тревожность</option>
                                                <option value="Депрессия" @if (old('category', $article->category) === 'Депрессия') selected @endif>
                                                    Депрессия</option>
                                                <option value="Медитация" @if (old('category', $article->category) === 'Медитация') selected @endif>
                                                    Медитация</option>
                                                <option value="Детская психология"
                                                    @if (old('category', $article->category) === 'Детская психология') selected @endif>Детская психология
                                                </option>
                                                <option value="Семейная терапия"
                                                    @if (old('category', $article->category) === 'Семейная терапия') selected @endif>Семейная терапия
                                                </option>
                                                <option value="Самооценка"
                                                    @if (old('category', $article->category) === 'Самооценка') selected @endif>Самооценка</option>
                                                <option value="Работа" @if (old('category', $article->category) === 'Работа') selected @endif>
                                                    Работа</option>
                                                <option value="Отношения"
                                                    @if (old('category', $article->category) === 'Отношения') selected @endif>Отношения</option>
                                            </select>
                                        </div>
                                        <div class="space-y-2">
                                            <label data-slot="label"
                                                class="flex items-center gap-2 text-sm leading-none font-medium select-none group-data-[disabled=true]:pointer-events-none group-data-[disabled=true]:opacity-50 peer-disabled:cursor-not-allowed peer-disabled:opacity-50"
                                                for="status">Статус *</label>
                                            <select id="status" name="status"
                                                class="w-full border border-gray-300 rounded-md px-3 py-2 focus:outline-none focus:ring-2 focus:ring-blue-500">
                                                <option value="draft" @if (old('status', $article->status) === 'draft') selected @endif>
                                                    Черновик</option>
                                                <option value="published"
                                                    @if (old('status', $article->status) === 'published') selected @endif>Опубликовать
                                                </option>
                                            </select>
                                        </div>
                                        <input type="file" accept="image/*" id="imageUpload"
                                            onchange="insertImage()" />
                                    </div>
                                    <div role="none" aria-orientation="horizontal"
                                        class="shrink-0 bg-gray-200 dark:bg-gray-700 h-px w-full"></div>
                                    <div class="flex gap-2 pt-2">
                                        <button type="submit"
                                            class="inline-flex items-center justify-center gap-2 whitespace-nowrap rounded-md font-medium transition-all disabled:pointer-events-none disabled:opacity-50 outline-none focus-visible:ring-2 focus-visible:ring-offset-2 text-white h-9 px-4 py-2 text-sm bg-myCustomColor hover:bg-myCustomColor-darkened">Опубликовать</button>
                                        <button type="button"
                                            class="inline-flex items-center justify-center gap-2 whitespace-nowrap rounded-md font-medium transition-all disabled:pointer-events-none disabled:opacity-50 outline-none focus-visible:ring-2 focus-visible:ring-offset-2 border border-gray-300 bg-white text-gray-900 hover:bg-gray-50 dark:bg-gray-800 dark:border-gray-600 dark:text-gray-100 dark:hover:bg-gray-700 h-9 px-4 py-2 text-sm">Отменить</button>
                                    </div>
                                    <form action="{{ route('article.store') }}" method="POST" class="space-y-6">
                                        @csrf
                                        <p class="text-sm text-gray-500 italic">* Все поля обязательны для заполнения</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
@endsection('content')
