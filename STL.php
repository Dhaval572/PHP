<!DOCTYPE html>
<html lang="en">
<head>
    <title>C++ STL Power | Ultimate Guide</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta charset="utf-8">
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        cppBlue: '#044F88',
                        cppLight: '#5D8BF4',
                        cppDark: '#002244',
                    },
                    fontFamily: {
                        mono: ['Fira Code', 'monospace'],
                    }
                }
            }
        }
    </script>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Fira+Code:wght@400;500;600&display=swap');
        
        body {
            font-family: 'Fira Code', monospace;
            background-color: #f8fafc;
            color: #1e293b;
            overflow-x: hidden;
        }
        
        .gradient-bg {
            background: linear-gradient(135deg, #044F88 0%, #5D8BF4 100%);
        }
        
        .card-hover {
            transition: all 0.3s ease;
        }
        
        .card-hover:hover {
            transform: translateY(-5px);
            box-shadow: 0 20px 25px -5px rgba(0, 0, 0, 0.1), 0 10px 10px -5px rgba(0, 0, 0, 0.04);
        }
        
        .code-block {
            background-color: #002244;
            border-left: 4px solid #5D8BF4;
        }
        
        .typewriter {
            overflow: hidden;
            border-right: 3px solid #5D8BF4;
            white-space: nowrap;
            margin: 0 auto;
            letter-spacing: 2px;
            animation: typing 3.5s steps(40, end), blink-caret 0.75s step-end infinite;
        }
        
        @keyframes typing {
            from { width: 0 }
            to { width: 100% }
        }
        
        @keyframes blink-caret {
            from, to { border-color: transparent }
            50% { border-color: #5D8BF4 }
        }
        
        .floating {
            animation: floating 3s ease-in-out infinite;
        }
        
        @keyframes floating {
            0% { transform: translateY(0px); }
            50% { transform: translateY(-15px); }
            100% { transform: translateY(0px); }
        }
    </style>
</head>
<body class="min-h-screen">
    <!-- Hero Section -->
    <div class="gradient-bg text-white">
        <div class="container mx-auto px-6 py-24">
            <div class="flex flex-col md:flex-row items-center">
                <div class="md:w-1/2 mb-10 md:mb-0">
                    <h1 class="text-4xl md:text-6xl font-bold mb-6">
                        <span class="text-gray-200">Master the</span><br>
                        <span class="typewriter">Power of C++ STL</span>
                    </h1>
                    <p class="text-xl mb-8 opacity-90">
                        Unlock the full potential of Standard Template Library with modern C++ techniques
                    </p>
                    <div class="flex space-x-4">
                        <button class="bg-white text-cppDark px-6 py-3 rounded-lg font-semibold hover:bg-gray-100 transition">
                            <i class="fas fa-book mr-2"></i> Learn Now
                        </button>
                        <button class="border-2 border-white text-white px-6 py-3 rounded-lg font-semibold hover:bg-white hover:text-cppDark transition">
                            <i class="fas fa-code mr-2"></i> Try Examples
                        </button>
                    </div>
                </div>
                <div class="md:w-1/2 flex justify-center">
                    <div class="relative floating">
                        <div class="absolute -inset-4 bg-cppLight rounded-full opacity-20 blur-lg"></div>
                        <div class="relative bg-white text-cppDark p-8 rounded-xl shadow-2xl w-80">
                            <div class="text-sm mb-4 text-gray-600">
                                <span class="text-cppBlue font-bold">#include</span> &lt;vector&gt;
                            </div>
                            <div class="text-sm mb-4 text-gray-600">
                                <span class="text-cppBlue font-bold">#include</span> &lt;algorithm&gt;
                            </div>
                            <div class="mb-4">
                                <span class="text-cppBlue font-bold">int</span> main() {
                            </div>
                            <div class="ml-4 mb-2">
                                <span class="text-purple-600 font-bold">std::vector</span>&lt;<span class="text-cppBlue font-bold">int</span>&gt; nums = {3,1,4,1,5,9,2,6};
                            </div>
                            <div class="ml-4 mb-2">
                                <span class="text-purple-600 font-bold">std::sort</span>(nums.begin(), nums.end());
                            </div>
                            <div class="ml-4 mb-2">
                                <span class="text-purple-600 font-bold">for</span> (<span class="text-cppBlue font-bold">auto</span> num : nums) {
                            </div>
                            <div class="ml-8 mb-2">
                                <span class="text-purple-600 font-bold">std::cout</span> &lt;&lt; num &lt;&lt; " ";
                            </div>
                            <div class="ml-4 mb-2">}</div>
                            <div class="mb-2">}</div>
                            <div class="mt-4 p-2 bg-gray-100 rounded text-xs">
                                <span class="text-gray-500">// Output: 1 1 2 3 4 5 6 9</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- STL Components Section -->
    <div class="py-20 bg-white">
        <div class="container mx-auto px-6">
            <h2 class="text-3xl font-bold text-center mb-16 text-cppDark">
                <span class="border-b-4 border-cppLight pb-2">STL Core Components</span>
            </h2>
            
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <!-- Container -->
                <div class="bg-gray-50 rounded-xl p-6 card-hover">
                    <div class="text-cppLight text-4xl mb-4">
                        <i class="fas fa-box-open"></i>
                    </div>
                    <h3 class="text-xl font-bold mb-3 text-cppDark">Containers</h3>
                    <p class="text-gray-600 mb-4">
                        Data structures that store collections of objects (vector, list, map, etc.)
                    </p>
                    <div class="code-block p-4 rounded text-white text-sm font-mono">
                        vector&lt;int&gt; v;<br>
                        map&lt;string, int&gt; m;<br>
                        stack&lt;double&gt; s;
                    </div>
                </div>
                
                <!-- Algorithms -->
                <div class="bg-gray-50 rounded-xl p-6 card-hover">
                    <div class="text-cppLight text-4xl mb-4">
                        <i class="fas fa-robot"></i>
                    </div>
                    <h3 class="text-xl font-bold mb-3 text-cppDark">Algorithms</h3>
                    <p class="text-gray-600 mb-4">
                        Functions that perform operations on containers (sort, find, transform, etc.)
                    </p>
                    <div class="code-block p-4 rounded text-white text-sm font-mono">
                        sort(v.begin(), v.end());<br>
                        auto it = find(v.begin(), v.end(), 42);<br>
                        transform(v.begin(), v.end(), ...);
                    </div>
                </div>
                
                <!-- Iterators -->
                <div class="bg-gray-50 rounded-xl p-6 card-hover">
                    <div class="text-cppLight text-4xl mb-4">
                        <i class="fas fa-arrows-alt"></i>
                    </div>
                    <h3 class="text-xl font-bold mb-3 text-cppDark">Iterators</h3>
                    <p class="text-gray-600 mb-4">
                        Objects that point to elements in containers, enabling traversal
                    </p>
                    <div class="code-block p-4 rounded text-white text-sm font-mono">
                        for(auto it = v.begin();<br>
                        &nbsp;&nbsp;it != v.end(); ++it) {<br>
                        &nbsp;&nbsp;cout &lt;&lt; *it;<br>
                        }
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Performance Comparison -->
    <div class="py-20 bg-gray-50">
        <div class="container mx-auto px-6">
            <h2 class="text-3xl font-bold text-center mb-16 text-cppDark">
                <span class="border-b-4 border-cppLight pb-2">STL Performance Advantage</span>
            </h2>
            
            <div class="bg-white rounded-xl shadow-lg overflow-hidden">
                <div class="grid grid-cols-1 md:grid-cols-2">
                    <div class="p-8">
                        <h3 class="text-2xl font-bold mb-4 text-cppDark">Raw Arrays vs STL Vectors</h3>
                        <p class="text-gray-600 mb-6">
                            STL containers provide both convenience and comparable performance to raw arrays,
                            with added safety and flexibility.
                        </p>
                        
                        <div class="space-y-4">
                            <div>
                                <div class="flex justify-between mb-1">
                                    <span class="text-sm font-medium text-cppDark">Insertion Time</span>
                                    <span class="text-sm font-medium">O(1)</span>
                                </div>
                                <div class="w-full bg-gray-200 rounded-full h-2.5">
                                    <div class="bg-cppLight h-2.5 rounded-full" style="width: 95%"></div>
                                </div>
                            </div>
                            
                            <div>
                                <div class="flex justify-between mb-1">
                                    <span class="text-sm font-medium text-cppDark">Access Time</span>
                                    <span class="text-sm font-medium">O(1)</span>
                                </div>
                                <div class="w-full bg-gray-200 rounded-full h-2.5">
                                    <div class="bg-cppLight h-2.5 rounded-full" style="width: 100%"></div>
                                </div>
                            </div>
                            
                            <div>
                                <div class="flex justify-between mb-1">
                                    <span class="text-sm font-medium text-cppDark">Memory Efficiency</span>
                                    <span class="text-sm font-medium">95%</span>
                                </div>
                                <div class="w-full bg-gray-200 rounded-full h-2.5">
                                    <div class="bg-cppLight h-2.5 rounded-full" style="width: 95%"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <div class="bg-cppDark p-8 text-white">
                        <h3 class="text-2xl font-bold mb-4">Modern C++ Features</h3>
                        <ul class="space-y-3">
                            <li class="flex items-start">
                                <i class="fas fa-check-circle text-cppLight mt-1 mr-3"></i>
                                <span>Range-based for loops for cleaner iteration</span>
                            </li>
                            <li class="flex items-start">
                                <i class="fas fa-check-circle text-cppLight mt-1 mr-3"></i>
                                <span>Smart pointers for automatic memory management</span>
                            </li>
                            <li class="flex items-start">
                                <i class="fas fa-check-circle text-cppLight mt-1 mr-3"></i>
                                <span>Lambda expressions for inline functions</span>
                            </li>
                            <li class="flex items-start">
                                <i class="fas fa-check-circle text-cppLight mt-1 mr-3"></i>
                                <span>Move semantics for efficient resource transfer</span>
                            </li>
                            <li class="flex items-start">
                                <i class="fas fa-check-circle text-cppLight mt-1 mr-3"></i>
                                <span>Concurrency support with threads and async</span>
                            </li>
                        </ul>
                        
                        <div class="mt-8 code-block p-4 rounded text-sm font-mono">
                            <span class="text-gray-400">// Modern C++ example</span><br>
                            vector&lt;string&gt; names{"Alice", "Bob", "Charlie"};<br>
                            <span class="text-purple-400">for</span> (<span class="text-blue-400">const</span> <span class="text-purple-400">auto</span>& name : names) {<br>
                            &nbsp;&nbsp;cout &lt;&lt; name &lt;&lt; endl;<br>
                            }
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- STL Algorithms Showcase -->
    <div class="py-20 bg-white">
        <div class="container mx-auto px-6">
            <h2 class="text-3xl font-bold text-center mb-16 text-cppDark">
                <span class="border-b-4 border-cppLight pb-2">Powerful STL Algorithms</span>
            </h2>
            
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                <!-- Sort -->
                <div class="bg-gray-50 rounded-xl p-6 card-hover">
                    <div class="flex justify-between items-start">
                        <h3 class="text-xl font-bold mb-3 text-cppDark">sort()</h3>
                        <span class="bg-cppLight text-white text-xs px-2 py-1 rounded">O(n log n)</span>
                    </div>
                    <p class="text-gray-600 mb-4">
                        Efficient sorting algorithm with customizable comparison
                    </p>
                    <div class="code-block p-4 rounded text-white text-sm font-mono">
                        vector&lt;int&gt; v = {5, 3, 1, 4, 2};<br>
                        sort(v.begin(), v.end());<br>
                        <span class="text-gray-400">// v = {1, 2, 3, 4, 5}</span>
                    </div>
                </div>
                
                <!-- Find -->
                <div class="bg-gray-50 rounded-xl p-6 card-hover">
                    <div class="flex justify-between items-start">
                        <h3 class="text-xl font-bold mb-3 text-cppDark">find()</h3>
                        <span class="bg-cppLight text-white text-xs px-2 py-1 rounded">O(n)</span>
                    </div>
                    <p class="text-gray-600 mb-4">
                        Linear search to find an element in a container
                    </p>
                    <div class="code-block p-4 rounded text-white text-sm font-mono">
                        auto it = find(v.begin(), v.end(), 3);<br>
                        <span class="text-gray-400">// returns iterator to 3 or end()</span>
                    </div>
                </div>
                
                <!-- Accumulate -->
                <div class="bg-gray-50 rounded-xl p-6 card-hover">
                    <div class="flex justify-between items-start">
                        <h3 class="text-xl font-bold mb-3 text-cppDark">accumulate()</h3>
                        <span class="bg-cppLight text-white text-xs px-2 py-1 rounded">O(n)</span>
                    </div>
                    <p class="text-gray-600 mb-4">
                        Calculate the sum (or custom reduction) of elements
                    </p>
                    <div class="code-block p-4 rounded text-white text-sm font-mono">
                        <span class="text-gray-400">#include</span> &lt;numeric&gt;<br>
                        int sum = accumulate(v.begin(), v.end(), 0);
                    </div>
                </div>
                
                <!-- Transform -->
                <div class="bg-gray-50 rounded-xl p-6 card-hover">
                    <div class="flex justify-between items-start">
                        <h3 class="text-xl font-bold mb-3 text-cppDark">transform()</h3>
                        <span class="bg-cppLight text-white text-xs px-2 py-1 rounded">O(n)</span>
                    </div>
                    <p class="text-gray-600 mb-4">
                        Apply a function to each element of a container
                    </p>
                    <div class="code-block p-4 rounded text-white text-sm font-mono">
                        transform(v.begin(), v.end(), v.begin(),<br>
                        &nbsp;&nbsp;[](int x) { return x * 2; });
                    </div>
                </div>
                
                <!-- Count -->
                <div class="bg-gray-50 rounded-xl p-6 card-hover">
                    <div class="flex justify-between items-start">
                        <h3 class="text-xl font-bold mb-3 text-cppDark">count_if()</h3>
                        <span class="bg-cppLight text-white text-xs px-2 py-1 rounded">O(n)</span>
                    </div>
                    <p class="text-gray-600 mb-4">
                        Count elements that satisfy a condition
                    </p>
                    <div class="code-block p-4 rounded text-white text-sm font-mono">
                        int c = count_if(v.begin(), v.end(),<br>
                        &nbsp;&nbsp;[](int x) { return x > 2; });
                    </div>
                </div>
                
                <!-- Binary Search -->
                <div class="bg-gray-50 rounded-xl p-6 card-hover">
                    <div class="flex justify-between items-start">
                        <h3 class="text-xl font-bold mb-3 text-cppDark">binary_search()</h3>
                        <span class="bg-cppLight text-white text-xs px-2 py-1 rounded">O(log n)</span>
                    </div>
                    <p class="text-gray-600 mb-4">
                        Fast search in sorted containers
                    </p>
                    <div class="code-block p-4 rounded text-white text-sm font-mono">
                        bool found = binary_search(v.begin(), v.end(), 42);
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- CTA Section -->
    <div class="gradient-bg text-white py-20">
        <div class="container mx-auto px-6 text-center">
            <h2 class="text-3xl md:text-4xl font-bold mb-6">Ready to Master C++ STL?</h2>
            <p class="text-xl mb-8 max-w-2xl mx-auto opacity-90">
                Join thousands of developers who've accelerated their C++ skills with STL
            </p>
            <div class="flex flex-col sm:flex-row justify-center space-y-4 sm:space-y-0 sm:space-x-4">
                <button class="bg-white text-cppDark px-8 py-4 rounded-lg font-bold hover:bg-gray-100 transition">
                    <i class="fas fa-graduation-cap mr-2"></i> Start Learning
                </button>
                <button class="border-2 border-white text-white px-8 py-4 rounded-lg font-bold hover:bg-white hover:text-cppDark transition">
                    <i class="fas fa-laptop-code mr-2"></i> Interactive Exercises
                </button>
            </div>
        </div>
    </div>

    <!-- Footer -->
    <footer class="bg-cppDark text-white py-12">
        <div class="container mx-auto px-6">
            <div class="flex flex-col md:flex-row justify-between items-center">
                <div class="mb-6 md:mb-0">
                    <h3 class="text-2xl font-bold mb-2">C++ STL Power</h3>
                    <p class="text-gray-400">Master the Standard Template Library</p>
                </div>
                <div class="flex space-x-6">
                    <a href="#" class="text-gray-400 hover:text-white transition">
                        <i class="fab fa-github text-2xl"></i>
                    </a>
                    <a href="#" class="text-gray-400 hover:text-white transition">
                        <i class="fab fa-twitter text-2xl"></i>
                    </a>
                    <a href="#" class="text-gray-400 hover:text-white transition">
                        <i class="fab fa-discord text-2xl"></i>
                    </a>
                    <a href="#" class="text-gray-400 hover:text-white transition">
                        <i class="fab fa-youtube text-2xl"></i>
                    </a>
                </div>
            </div>
            <div class="border-t border-gray-800 mt-8 pt-8 text-center text-gray-400">
                <p>&copy; 2023 C++ STL Power. All rights reserved.</p>
            </div>
        </div>
    </footer>

    <script>
        // Simple animation for code examples
        document.addEventListener('DOMContentLoaded', function() {
            const cards = document.querySelectorAll('.card-hover');
            
            cards.forEach(card => {
                card.addEventListener('mouseenter', function() {
                    this.style.transform = 'translateY(-5px)';
                    this.style.boxShadow = '0 20px 25px -5px rgba(0, 0, 0, 0.1), 0 10px 10px -5px rgba(0, 0, 0, 0.04)';
                });
                
                card.addEventListener('mouseleave', function() {
                    this.style.transform = '';
                    this.style.boxShadow = '';
                });
            });
            
            // Typewriter effect for additional phrases
            const phrases = [
                "Power of C++ STL",
                "STL Containers",
                "STL Algorithms",
                "Modern C++",
                "Efficient Code"
            ];
            let currentPhrase = 0;
            const typewriterElement = document.querySelector('.typewriter');
            
            function cyclePhrases() {
                currentPhrase = (currentPhrase + 1) % phrases.length;
                typewriterElement.textContent = '';
                typewriterElement.style.width = '0';
                typewriterElement.style.animation = 'none';
                void typewriterElement.offsetWidth; // Trigger reflow
                typewriterElement.textContent = phrases[currentPhrase];
                typewriterElement.style.animation = 'typing 3.5s steps(40, end), blink-caret 0.75s step-end infinite';
            }
            
            setInterval(cyclePhrases, 4000);
        });
    </script>
</body>
</html>	