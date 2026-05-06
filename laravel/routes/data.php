<?php

define('SITE_NAME', 'Cyrus Cuaresma');
define('SITE_TAGLINE', 'Future Full-Stack Developer');
define('SITE_EMAIL', 'cyruscuaresma23@gmail.com');
define('SITE_GITHUB', 'https://github.com/CyrusMarikit2021');

$projects = [
    'sungka-UI' => [
        'title'       => 'Sungka UI',
        'category'    => 'Design System',
        'year'        => '2026',
        'tech'        => ['MySQL', 'JavaScript', 'Dart', 'Figma', 'PHP'],
        'description' => 'A comprehensive design system built for multiple-scale applications. Features 70+ components, dark/light theming, and a compliance for full accessibility.',
        'long'        => 'Sungka UI was born out of a need for consistency across a suite of 12 internal tools. I architected the token system, built the component library from scratch, and wrote the documentation site. The result reduced cross-team UI inconsistency by over 90% and cut new feature development time in half.',
        'image'       => 'sungka',
        'link'        => '#',
    ],
    'paniqui-api' => [
        'title'       => 'Paniqui API',
        'category'    => 'Backend / DevOps',
        'year'        => '2026',
        'tech'        => ['Java', 'MySQL', 'Dart', 'PHP'],
        'description' => 'High-throughput REST & GraphQL API gateway that handles 1.5M+ requests/day with sub-25ms p99 latency.',
        'long'        => 'Designed and deployed an API gateway with zero-downtime for a fintech startup. Implemented circuit breakers, rate limiting, and distributed tracing. Migrated the monolith to microservices with blue-green deployments.',
        'image'       => 'paniqui',
        'link'        => '#',
    ],
];

$blog_posts = [
    'filipino-apis' => [
        'title'    => 'Filipino APIs: A Road for National Identity in IT',
        'date'     => 'May 5, 2026',
        'category' => 'Backend',
        'read'     => '8 min read',
        'excerpt'  => 'Good APIs are invisible, and great APIs are a joy to use. Here\'s what I\'ve learned designing interfaces that developers actually love.',
        'body'     => [
            'API design is a craft, not a checklist. It requires empathy, foresight, and a deep understanding of your consumers\' needs and workflows.',
            'The best APIs treat their endpoints as a public contract. Changes should be additive and non-breaking. Versioning is a last resort, not a default.',
            'Start with the data model, but don\'t be married to it. The API should reflect the user\'s mental model, not the database schema.',
            'Name things intentionally. A well-named endpoint or parameter can save hours of confusion and support tickets.',
            'Be consistent in your design patterns. If you use pagination on one list endpoint, use it on all list endpoints. If you return errors in a certain format, stick to it everywhere.',
        ],
    ],
    'filipino-css-architecture' => [
        'title'    => 'Filipino-named CSS Architecture: Managing Styles at Scale',
        'date'     => 'May 6, 2026',
        'category' => 'Frontend',
        'read'     => '7 min read',
        'excerpt'  => 'CSS can be a nightmare at scale. Here\'s how I structure my stylesheets to keep them maintainable and performant, even as projects grow to thousands of lines of CSS.',
        'body'     => [
            'I\'ve written CSS in every way imaginable: global stylesheets, CSS Modules, BEM, utility-first, you name it. Each has its merits and trade-offs.',
            'The key is to choose a structure that fits your team\'s size, project complexity, and workflow. There\'s no one-size-fits-all solution.',
            'Today, I prefer a hybrid approach: component-scoped styles for isolated UI elements, and a well-organized global stylesheet for shared utilities and base styles.',
            'CSS custom properties are a game-changer for theming and dynamic styling. I use them extensively for colors, spacing, and typography tokens.',
        ],
    ],
    'mysql-integration' => [
        'title'    => 'MySQL Query Optimization: Reading the Query Planner\'s Mind',
        'date'     => 'April 30, 2026',
        'category' => 'Database',
        'read'     => '9 min read',
        'excerpt'  => 'This isn\'t your average "add an index" article. I\'ll show you how to interpret the query planner\'s output, identify its misconceptions, and write queries that play to MySQL\'s strengths instead of working against them.',
        'body'     => [
            'In the world of databases, the query planner is your best friend and worst enemy. It makes decisions based on statistics and heuristics, which can lead to suboptimal plans if it\'s misinformed.',
            'However, understanding how to work with it can significantly improve your database performance.',
            'Sequences of joins, filters, and aggregations can have drastically different performance characteristics based on how the planner decides to execute them.',
            'The most common mistake is to assume that the planner always makes the right choice. In reality, it can be misled by outdated statistics, complex queries, or edge cases in its algorithms.',
            'Run EXPLAIN on your queries, analyze the output, and experiment with query rewrites to find the most efficient execution path.',
        ],
    ],
];

$skills = [
    'Frontend' => [
        ['name' => 'React / Next.js',    'level' => 93],
        ['name' => 'TypeScript',         'level' => 91],
        ['name' => 'Vue 3',              'level' => 86],
        ['name' => 'CSS / Animation',    'level' => 88],
        ['name' => 'React Native',       'level' => 79],
    ],
    'Backend' => [
        ['name' => 'PHP / Laravel',      'level' => 92],
        ['name' => 'Node.js / Express',  'level' => 90],
        ['name' => 'Go',                 'level' => 80],
        ['name' => 'Python / FastAPI',   'level' => 84],
        ['name' => 'GraphQL',            'level' => 85],
    ],
    'Infrastructure' => [
        ['name' => 'PostgreSQL',         'level' => 90],
        ['name' => 'Redis',              'level' => 85],
        ['name' => 'Docker / Kubernetes','level' => 80],
        ['name' => 'AWS',                'level' => 82],
        ['name' => 'CI/CD Pipelines',    'level' => 87],
    ],
];

$experience = [
    [
        'role'    => 'Computer Programming Student',
        'school' => 'Technological University of the Philippines',
        'period'  => '2024 — Present',
        'type'    => 'Education',
        'points'  => [
            'Progressed the curriculum with a focus on modern web development practices, including JavaScript frameworks, RESTful API design, and cloud deployment.',
            'While me and my classmates are still studying, I\'ve taken the initiative to build several personal projects to apply what I\'ve learned and explore areas not covered in class, such as React Native and GraphQL.',
            'Collaborated with peers on group projects, honing my teamwork and communication skills in a remote learning environment.',
        ],
    ],
];

$uses_list = [
    'Hardware' => [
        ['item' => 'Asus ZenBook', 'note' => 'Reliable workhorse with a comfortable keyboard.'],
        ['item' => 'LG UltraFine 27" 4K', 'note' => 'Easy on the eyes for long sessions.'],
        ['item' => 'Keychron K8 Pro', 'note' => 'Mechanical keyboard that keeps me typing all day.'],
        ['item' => 'Logitech MX Master 3', 'note' => 'Ergonomic mouse with customizable buttons.'],
    ],
    'Development' => [
        ['item' => 'VS Code', 'note' => 'Neovim is cool, productivity is cooler.'],
        ['item' => 'Codespaces', 'note' => 'Instant dev environments in the cloud, no setup required.'],
        ['item' => 'GitHub Copilot', 'note' => 'My AI pair programmer that helps me write code faster.'],
    ],
    'Design' => [
        ['item' => 'Figma', 'note' => 'This is where I do all my design work, from wireframes to high-fidelity mockups.'],
        ['item' => 'Miro', 'note' => 'For brainstorming sessions and collaborative whiteboarding.'],
    ],
    'Productivity' => [
        ['item' => 'Notion', 'note' => 'Project notes, architecture decisions, everything.'],
        ['item' => 'Trello', 'note' => 'Simple kanban boards to keep track of tasks and deadlines.'],
        ['item' => 'Google Calendar', 'note' => 'Scheduling meetings and blocking out focused work time.'],
    ],
];