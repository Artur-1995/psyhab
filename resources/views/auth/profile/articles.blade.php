<!-- Контент вкладок -->
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
<div class="outline-none space-y-6">
    <div data-slot="card" class="bg-card text-card-foreground flex flex-col gap-6 rounded-xl border-0 shadow-lg">
        <div data-slot="card-header"
            class="@container/card-header grid auto-rows-min grid-rows-[auto_auto] items-start gap-1.5 px-6 pt-6 has-data-[slot=card-action]:grid-cols-[1fr_auto] [.border-b]:pb-6">
            <div class="flex items-center justify-between">
                <h4 data-slot="card-title" class="leading-none flex items-center gap-2"><svg
                        xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                        fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                        stroke-linejoin="round" class="lucide lucide-file-text w-5 h-5" aria-hidden="true">
                        <path d="M15 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V7Z"></path>
                        <path d="M14 2v4a2 2 0 0 0 2 2h4"></path>
                        <path d="M10 9H8"></path>
                        <path d="M16 13H8"></path>
                        <path d="M16 17H8"></path>
                    </svg>Мои статьи</h4><button id="newArticleButton"
                    class="inline-flex items-center justify-center gap-2 whitespace-nowrap rounded-md font-medium transition-all disabled:pointer-events-none disabled:opacity-50 outline-none focus-visible:ring-2 focus-visible:ring-offset-2 text-white h-9 px-4 py-2 text-sm bg-myCustomColor hover:bg-myCustomColor-darkened"><svg
                        xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                        fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                        stroke-linejoin="round" class="lucide lucide-plus w-4 h-4 mr-2" aria-hidden="true">
                        <path d="M5 12h14"></path>
                        <path d="M12 5v14"></path>
                    </svg>Новая статья</button>
            </div>
        </div>
        <div class="border-2 border-blue-500 rounded-lg p-6 space-y-4 bg-gradient-to-br from-blue-50 to-indigo-50"
            id="newArticleForm" style="display: none">
            <div class="flex items-center justify-between mb-4">
                <h4 data-slot="card-title" class="leading-none flex items-center gap-2"><svg
                        xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                        fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                        stroke-linejoin="round" class="lucide lucide-file-text w-5 h-5" aria-hidden="true">
                        <path d="M12 20h9"></path>
                        <path d="M16.5 3.5a2.121 2.121 0 0 1 3 3L7 19l-4 1 1-4L16.5 3.5z"></path>
                    </svg>Новая статья</h4><button id="closeNewArticleButton"
                    class="inline-flex items-center justify-center gap-2 whitespace-nowrap rounded-md font-medium transition-all disabled:pointer-events-none disabled:opacity-50 outline-none focus-visible:ring-2 focus-visible:ring-offset-2 bg-transparent hover:bg-gray-100 dark:hover:bg-gray-800 h-8 px-3 text-sm"><svg
                        xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                        fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                        stroke-linejoin="round" class="lucide lucide-x w-4 h-4" aria-hidden="true">
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
                        name="title" id="new-title" placeholder="Введите название статьи" value=""></div>
                <div class="space-y-2"><label data-slot="label"
                        class="flex items-center gap-2 text-sm leading-none font-medium select-none group-data-[disabled=true]:pointer-events-none group-data-[disabled=true]:opacity-50 peer-disabled:cursor-not-allowed peer-disabled:opacity-50"
                        for="new-excerpt">Описание *</label>
                    <textarea data-slot="textarea"
                        class="resize-none border-input placeholder:text-muted-foreground focus-visible:border-ring focus-visible:ring-ring/50 aria-invalid:ring-destructive/20 dark:aria-invalid:ring-destructive/40 aria-invalid:border-destructive dark:bg-input/30 flex field-sizing-content min-h-16 w-full rounded-md border bg-input-background px-3 py-2 text-base transition-[color,box-shadow] outline-none focus-visible:ring-[3px] disabled:cursor-not-allowed disabled:opacity-50 md:text-sm"
                        name="description" id="new-excerpt" placeholder="Краткое описание статьи для предварительного просмотра"
                        rows="2"></textarea>
                </div>

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
                        id="editor" placeholder="Введите текст вашей статьи" rows="8"></textarea>
                </div>
                <div class="grid md:grid-cols-2 gap-4">
                    <div class="space-y-2"><label data-slot="label"
                            class="flex items-center gap-2 text-sm leading-none font-medium select-none group-data-[disabled=true]:pointer-events-none group-data-[disabled=true]:opacity-50 peer-disabled:cursor-not-allowed peer-disabled:opacity-50"
                            for="new-category">Категория *</label><select id="new-category" name="category"
                            class="w-full border border-gray-300 rounded-md px-3 py-2 focus:outline-none focus:ring-2 focus:ring-blue-500">
                            <option value="">Выберите категорию</option>
                            <option value="Тревожность">Тревожность</option>
                            <option value="Депрессия">Депрессия</option>
                            <option value="Медитация">Медитация</option>
                            <option value="Детская психология">Детская психология</option>
                            <option value="Семейная терапия">Семейная терапия</option>
                            <option value="Самооценка">Самооценка</option>
                            <option value="Работа">Работа</option>
                            <option value="Отношения">Отношения</option>
                        </select></div>
                    {{-- <div class="space-y-2"><label data-slot="label"
                            class="flex items-center gap-2 text-sm leading-none font-medium select-none group-data-[disabled=true]:pointer-events-none group-data-[disabled=true]:opacity-50 peer-disabled:cursor-not-allowed peer-disabled:opacity-50"
                            for="new-status">Статус *</label><select id="new-status" name="status"
                            class="w-full border border-gray-300 rounded-md px-3 py-2 focus:outline-none focus:ring-2 focus:ring-blue-500">
                            <option selected value="published">Опубликовать</option>
                            <option value="draft">Черновик</option>
                        </select></div> --}}
                    {{-- <input type="file" accept="image/*" id="imageUpload" onchange="insertImage()" /> --}}
                </div>
                <div role="none" aria-orientation="horizontal"
                    class="shrink-0 bg-gray-200 dark:bg-gray-700 h-px w-full"></div>
                <div class="flex gap-2 pt-2">
                    <button type="submit"
                        class="inline-flex items-center justify-center gap-2 whitespace-nowrap rounded-md font-medium transition-all disabled:pointer-events-none disabled:opacity-50 outline-none focus-visible:ring-2 focus-visible:ring-offset-2 text-white h-9 px-4 py-2 text-sm bg-myCustomColor hover:bg-myCustomColor-darkened">Опубликовать</button>
                    {{-- <button type="button"
                        class="inline-flex items-center justify-center gap-2 whitespace-nowrap rounded-md font-medium transition-all disabled:pointer-events-none disabled:opacity-50 outline-none focus-visible:ring-2 focus-visible:ring-offset-2 border border-gray-300 bg-white text-gray-900 hover:bg-gray-50 dark:bg-gray-800 dark:border-gray-600 dark:text-gray-100 dark:hover:bg-gray-700 h-9 px-4 py-2 text-sm">Отменить</button> --}}
                </div>
            </form>
            <p class="text-sm text-gray-500 italic">* Все поля обязательны для заполнения</p>
        </div>

        <div data-slot="card-content" class="px-6 [&amp;:last-child]:pb-6 space-y-4" id="articles">
            @if ($user->articles)
                @foreach ($user->articles as $article)
                    <div>
                        <div class="border rounded-lg p-6 hover:shadow-md transition-shadow">
                            <div class="flex items-start justify-between mb-4">
                                <div class="flex-1">
                                    <div class="flex items-center gap-2 mb-2"><span
                                            class="inline-flex items-center justify-center rounded-md border px-2 py-0.5 text-xs font-medium whitespace-nowrap border-transparent bg-myCustomColor text-white dark:bg-blue-700">Опубликовано</span><span
                                            class="inline-flex items-center justify-center rounded-md border px-2 py-0.5 text-xs font-medium whitespace-nowrap border-gray-300 text-gray-900 dark:border-gray-600 dark:text-gray-100">{{ $article->category }}</span><span
                                            class="text-sm text-gray-500">•</span><span
                                            class="text-sm text-gray-500">{{ $article->created_at }}</span></div>
                                    <h3 class="text-xl font-semibold text-gray-900 mb-2">{{ $article->title }}</h3>
                                    <p class="text-gray-600 mb-4">{{ $article->description }}</p>
                                    <div class="flex items-center gap-4 text-sm text-gray-500">
                                        <div class="flex items-center gap-1"><svg xmlns="http://www.w3.org/2000/svg"
                                                width="24" height="24" viewBox="0 0 24 24" fill="none"
                                                stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                                stroke-linejoin="round" class="lucide lucide-eye w-4 h-4"
                                                aria-hidden="true">
                                                <path
                                                    d="M2.062 12.348a1 1 0 0 1 0-.696 10.75 10.75 0 0 1 19.876 0 1 1 0 0 1 0 .696 10.75 10.75 0 0 1-19.876 0">
                                                </path>
                                                <circle cx="12" cy="12" r="3"></circle>
                                            </svg>{{ $article->views }}</div>
                                        {{-- <div class="flex items-center gap-1"><svg xmlns="http://www.w3.org/2000/svg"
                                            width="24" height="24" viewBox="0 0 24 24" fill="none"
                                            stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                            stroke-linejoin="round" class="lucide lucide-thumbs-up w-4 h-4"
                                            aria-hidden="true">
                                            <path d="M7 10v12"></path>
                                            <path
                                                d="M15 5.88 14 10h5.83a2 2 0 0 1 1.92 2.56l-2.33 8A2 2 0 0 1 17.5 22H4a2 2 0 0 1-2-2v-8a2 2 0 0 1 2-2h2.76a2 2 0 0 0 1.79-1.11L12 2a3.13 3.13 0 0 1 3 3.88Z">
                                            </path>
                                        </svg>89</div> --}}
                                        {{-- <div class="flex items-center gap-1"><svg xmlns="http://www.w3.org/2000/svg"
                                            width="24" height="24" viewBox="0 0 24 24" fill="none"
                                            stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                            stroke-linejoin="round" class="lucide lucide-message-circle w-4 h-4"
                                            aria-hidden="true">
                                            <path
                                                d="M2.992 16.342a2 2 0 0 1 .094 1.167l-1.065 3.29a1 1 0 0 0 1.236 1.168l3.413-.998a2 2 0 0 1 1.099.092 10 10 0 1 0-4.777-4.719">
                                            </path>
                                        </svg>23</div> --}}
                                    </div>
                                </div>
                            </div>
                            <div class="flex gap-2">
                                <a href="{{ route('articles.edit', $article->id) }}"
                                    class="inline-flex items-center justify-center gap-2 whitespace-nowrap rounded-md font-medium transition-all disabled:pointer-events-none disabled:opacity-50 outline-none focus-visible:ring-2 focus-visible:ring-offset-2 border border-gray-300 bg-white text-gray-900 hover:bg-gray-50 dark:bg-gray-800 dark:border-gray-600 dark:text-gray-100 dark:hover:bg-gray-700 h-8 px-3 text-sm"><svg
                                        xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                        viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                        stroke-linecap="round" stroke-linejoin="round"
                                        class="lucide lucide-square-pen w-4 h-4 mr-2" aria-hidden="true">
                                        <path d="M12 3H5a2 2 0 0 0-2 2v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2v-7"></path>
                                        <path
                                            d="M18.375 2.625a1 1 0 0 1 3 3l-9.013 9.014a2 2 0 0 1-.853.505l-2.873.84a.5.5 0 0 1-.62-.62l.84-2.873a2 2 0 0 1 .506-.852z">
                                        </path>
                                    </svg>Редактировать</a>
                                <form action="{{ route('articles.destroy', $article->id) }}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit"
                                        onclick="return confirm('Вы уверены, что хотите удалить статью?')"
                                        class="inline-flex items-center justify-center gap-2 whitespace-nowrap rounded-md font-medium transition-all disabled:pointer-events-none disabled:opacity-50 outline-none focus-visible:ring-2 focus-visible:ring-offset-2 border border-gray-300 bg-white hover:bg-gray-50 dark:bg-gray-800 dark:border-gray-600 dark:text-gray-100 dark:hover:bg-gray-700 h-8 px-3 text-sm text-red-600 hover:text-red-700"><svg
                                            xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                            viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                            stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                            class="lucide lucide-trash2 lucide-trash-2 w-4 h-4 mr-2"
                                            aria-hidden="true">
                                            <path d="M10 11v6"></path>
                                            <path d="M14 11v6"></path>
                                            <path d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6"></path>
                                            <path d="M3 6h18"></path>
                                            <path d="M8 6V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2"></path>
                                        </svg>Удалить</button>
                                </form>
                                <form
                                    action="{{ route('article.show', ['slug' => Str::replace(' ', '_', preg_replace('/[^a-zA-Z0-9\s]/u', '', Str::transliterate($article->title))), 'id' => $article->id]) }}"
                                    method="GET">
                                    @csrf
                                    @method('GET')
                                    <button type="submit"
                                        class="inline-flex items-center justify-center gap-2 whitespace-nowrap rounded-md font-medium transition-all disabled:pointer-events-none disabled:opacity-50 outline-none focus-visible:ring-2 focus-visible:ring-offset-2 border border-gray-300 bg-white text-gray-900 hover:bg-gray-50 dark:bg-gray-800 dark:border-gray-600 dark:text-gray-100 dark:hover:bg-gray-700 h-8 px-3 text-sm"><svg
                                            xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                            viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                            stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                            class="lucide lucide-eye w-4 h-4 mr-2" aria-hidden="true">
                                            <path
                                                d="M2.062 12.348a1 1 0 0 1 0-.696 10.75 10.75 0 0 1 19.876 0 1 1 0 0 1 0 .696 10.75 10.75 0 0 1-19.876 0">
                                            </path>
                                            <circle cx="12" cy="12" r="3"></circle>
                                        </svg>Просмотр</button>
                                </form>
                            </div>
                        </div>
                    </div>
                @endforeach

                {{-- <div>
                    <div class="border rounded-lg p-6 hover:shadow-md transition-shadow">
                        <div class="flex items-start justify-between mb-4">
                            <div class="flex-1">
                                <div class="flex items-center gap-2 mb-2"><span
                                        class="inline-flex items-center justify-center rounded-md border px-2 py-0.5 text-xs font-medium whitespace-nowrap border-transparent bg-myCustomColor text-white dark:bg-blue-700">Опубликовано</span><span
                                        class="inline-flex items-center justify-center rounded-md border px-2 py-0.5 text-xs font-medium whitespace-nowrap border-gray-300 text-gray-900 dark:border-gray-600 dark:text-gray-100">Депрессия</span><span
                                        class="text-sm text-gray-500">•</span><span class="text-sm text-gray-500">28
                                        августа 2025</span></div>
                                <h3 class="text-xl font-semibold text-gray-900 mb-2">Депрессия: признаки и способы
                                    помощи
                                </h3>
                                <p class="text-gray-600 mb-4">Важная информация о депрессии и пути выхода из неё</p>
                                <div class="flex items-center gap-4 text-sm text-gray-500">
                                    <div class="flex items-center gap-1"><svg xmlns="http://www.w3.org/2000/svg"
                                            width="24" height="24" viewBox="0 0 24 24" fill="none"
                                            stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                            stroke-linejoin="round" class="lucide lucide-eye w-4 h-4"
                                            aria-hidden="true">
                                            <path
                                                d="M2.062 12.348a1 1 0 0 1 0-.696 10.75 10.75 0 0 1 19.876 0 1 1 0 0 1 0 .696 10.75 10.75 0 0 1-19.876 0">
                                            </path>
                                            <circle cx="12" cy="12" r="3"></circle>
                                        </svg>1156</div>
                                    <div class="flex items-center gap-1"><svg xmlns="http://www.w3.org/2000/svg"
                                            width="24" height="24" viewBox="0 0 24 24" fill="none"
                                            stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                            stroke-linejoin="round" class="lucide lucide-thumbs-up w-4 h-4"
                                            aria-hidden="true">
                                            <path d="M7 10v12"></path>
                                            <path
                                                d="M15 5.88 14 10h5.83a2 2 0 0 1 1.92 2.56l-2.33 8A2 2 0 0 1 17.5 22H4a2 2 0 0 1-2-2v-8a2 2 0 0 1 2-2h2.76a2 2 0 0 0 1.79-1.11L12 2a3.13 3.13 0 0 1 3 3.88Z">
                                            </path>
                                        </svg>98</div>
                                    <div class="flex items-center gap-1"><svg xmlns="http://www.w3.org/2000/svg"
                                            width="24" height="24" viewBox="0 0 24 24" fill="none"
                                            stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                            stroke-linejoin="round" class="lucide lucide-message-circle w-4 h-4"
                                            aria-hidden="true">
                                            <path
                                                d="M2.992 16.342a2 2 0 0 1 .094 1.167l-1.065 3.29a1 1 0 0 0 1.236 1.168l3.413-.998a2 2 0 0 1 1.099.092 10 10 0 1 0-4.777-4.719">
                                            </path>
                                        </svg>31</div>
                                </div>
                            </div>
                        </div>
                        <div class="flex gap-2"><button
                                class="inline-flex items-center justify-center gap-2 whitespace-nowrap rounded-md font-medium transition-all disabled:pointer-events-none disabled:opacity-50 outline-none focus-visible:ring-2 focus-visible:ring-offset-2 border border-gray-300 bg-white text-gray-900 hover:bg-gray-50 dark:bg-gray-800 dark:border-gray-600 dark:text-gray-100 dark:hover:bg-gray-700 h-8 px-3 text-sm"><svg
                                    xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                    viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                    stroke-linecap="round" stroke-linejoin="round"
                                    class="lucide lucide-square-pen w-4 h-4 mr-2" aria-hidden="true">
                                    <path d="M12 3H5a2 2 0 0 0-2 2v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2v-7"></path>
                                    <path
                                        d="M18.375 2.625a1 1 0 0 1 3 3l-9.013 9.014a2 2 0 0 1-.853.505l-2.873.84a.5.5 0 0 1-.62-.62l.84-2.873a2 2 0 0 1 .506-.852z">
                                    </path>
                                </svg>Редактировать</button><button
                                class="inline-flex items-center justify-center gap-2 whitespace-nowrap rounded-md font-medium transition-all disabled:pointer-events-none disabled:opacity-50 outline-none focus-visible:ring-2 focus-visible:ring-offset-2 border border-gray-300 bg-white hover:bg-gray-50 dark:bg-gray-800 dark:border-gray-600 dark:text-gray-100 dark:hover:bg-gray-700 h-8 px-3 text-sm text-red-600 hover:text-red-700"><svg
                                    xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                    viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                    stroke-linecap="round" stroke-linejoin="round"
                                    class="lucide lucide-trash2 lucide-trash-2 w-4 h-4 mr-2" aria-hidden="true">
                                    <path d="M10 11v6"></path>
                                    <path d="M14 11v6"></path>
                                    <path d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6"></path>
                                    <path d="M3 6h18"></path>
                                    <path d="M8 6V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2"></path>
                                </svg>Удалить</button><button
                                class="inline-flex items-center justify-center gap-2 whitespace-nowrap rounded-md font-medium transition-all disabled:pointer-events-none disabled:opacity-50 outline-none focus-visible:ring-2 focus-visible:ring-offset-2 border border-gray-300 bg-white text-gray-900 hover:bg-gray-50 dark:bg-gray-800 dark:border-gray-600 dark:text-gray-100 dark:hover:bg-gray-700 h-8 px-3 text-sm"><svg
                                    xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                    viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                    stroke-linecap="round" stroke-linejoin="round"
                                    class="lucide lucide-eye w-4 h-4 mr-2" aria-hidden="true">
                                    <path
                                        d="M2.062 12.348a1 1 0 0 1 0-.696 10.75 10.75 0 0 1 19.876 0 1 1 0 0 1 0 .696 10.75 10.75 0 0 1-19.876 0">
                                    </path>
                                    <circle cx="12" cy="12" r="3"></circle>
                                </svg>Просмотр</button></div>
                    </div>
                </div> --}}
            @else
                У вас нет написанных статей.
            @endif
        </div>

    </div>
</div>

<script>
    $('#newArticleButton').on('click', function(e) {
        if (document.getElementById('newArticleForm').style.display === 'none') {
            document.getElementById('newArticleForm').style.display = 'block';
            document.getElementById('newArticleButton').style = "display: none";
            document.getElementById('articles').style = "display: none";
            document.querySelector('div[data-slot="card-header"').style = "display: none";
        }
    });

    $('#closeNewArticleButton').on('click', function(e) {
        if (document.getElementById('newArticleForm').style.display === 'block') {
            document.getElementById('newArticleForm').style.display = 'none';
            document.getElementById('newArticleButton').style = "";
            document.getElementById('articles').style = "";
            document.querySelector('div[data-slot="card-header"').style = "";
        }
    });

    // Подсчет кол-ва симовол в поле текст для новой статьи
    document.getElementById('editor').addEventListener('input', function() {
        document.getElementById('charCount').textContent =
            `Символов: ${document.getElementById('editor').value.length}`;
    });

    function insertImage() {
        const fileInput = document.getElementById('imageUpload');
        const file = fileInput.files[0];
        if (!file) return;

        const reader = new FileReader();
        reader.onload = e => {
            const imgUrl = e.target.result;
            const editableArea = document.getElementById('editableArea');
            const imgElement = document.createElement('img');
            imgElement.src = imgUrl;
            editableArea.appendChild(imgElement);
        };
        reader.readAsDataURL(file);
    }
</script>
