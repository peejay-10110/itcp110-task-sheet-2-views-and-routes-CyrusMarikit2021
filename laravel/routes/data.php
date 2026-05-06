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
    'the-art-of-api-design' => [
        'title'    => 'Filipino APIs: A Road for National Identity in IT',
        'date'     => 'May 5, 2026',
        'category' => 'Engineering',
        'read'     => '8 min read',
        'excerpt'  => 'Good APIs are invisible, and great APIs are a joy to use. Here\'s what I\'ve learned designing interfaces that developers actually love.',
        'body'     => [
            'API design is one of those disciplines that looks easy until you\'ve maintained a bad one for two years.',
            'The best APIs I\'ve encountered share a common trait: they feel inevitable. Every endpoint name, every response shape, every error code feels like the only right choice. That feeling doesn\'t happen by accident.',
            'Start with your consumers. Before writing a single line of code, write the client code you wish existed. This "outside-in" approach forces you to prioritize developer experience over implementation convenience.',
            'Name things consistently and precisely. Use nouns for resources, verbs only for actions that don\'t map cleanly to CRUD. /users/123/activate is fine. /doUserActivation is not.',
            'Be boring with your response shapes. Consistent envelope structures ({data, meta, errors}) reduce cognitive load dramatically. Your consumers will thank you at 2am when something breaks.',
        ],
    ],
    'css-architecture-at-scale' => [
        'title'    => 'CSS Architecture at Scale: Beyond BEM',
        'date'     => 'January 28, 2025',
        'category' => 'Frontend',
        'read'     => '6 min read',
        'excerpt'  => 'BEM got us far, but modern CSS offers primitives that make large-scale styling genuinely manageable. Here\'s my current approach.',
        'body'     => [
            'I\'ve written CSS in nearly every methodology: BEM, OOCSS, SMACSS, utility-first, CSS-in-JS, and everything in between.',
            'The honest truth is that methodology matters less than consistency. The worst CSS I\'ve ever inherited wasn\'t written without a methodology — it was written with three of them simultaneously.',
            'Today, I lean on a layered approach: design tokens at the foundation, a utility layer for spacing and typography, component-scoped styles for complex patterns, and a thin global layer for resets and layout primitives.',
            'CSS custom properties changed everything. They\'re not just variables — they\'re a communication channel between your design system and your components. Embrace them fully.',
        ],
    ],
    'postgres-performance-deep-dive' => [
        'title'    => 'PostgreSQL Performance: A Deep Dive Into Query Planning',
        'date'     => 'December 5, 2024',
        'category' => 'Database',
        'read'     => '11 min read',
        'excerpt'  => 'EXPLAIN ANALYZE is your best friend. Here\'s how to actually read what it\'s telling you and stop writing slow queries.',
        'body'     => [
            'Most slow queries aren\'t slow because the database is bad at its job. They\'re slow because we\'re asking the database to do the wrong job.',
            'The query planner is a sophisticated cost-based optimizer. Understanding its assumptions — and how to correct them — is the single highest-leverage skill for backend performance.',
            'Seq scans aren\'t always bad. For small tables or queries returning >20% of rows, a sequential scan will outperform an index scan. Stop blindly adding indexes.',
            'The most common mistake I see: filtering on non-indexed columns in joins, then being surprised when a 10-row table join takes 3 seconds against a 10M-row table.',
            'Run EXPLAIN (ANALYZE, BUFFERS) in a transaction you roll back. Look at the row count estimates vs actuals. A large discrepancy tells you the planner has bad statistics — run ANALYZE on the table.',
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
        'role'    => 'Senior Full-Stack Engineer',
        'company' => 'Orbital Systems',
        'period'  => '2022 — Present',
        'type'    => 'Full-time',
        'points'  => [
            'Led architecture of a microservices platform serving 2M+ daily active users.',
            'Built and maintained a React design system adopted across 6 product teams.',
            'Mentored 4 junior engineers; introduced bi-weekly technical review sessions.',
            'Reduced infrastructure costs by 34% through query optimization and caching strategy.',
        ],
    ],
    [
        'role'    => 'Full-Stack Developer',
        'company' => 'Nimbus Labs',
        'period'  => '2020 — 2022',
        'type'    => 'Full-time',
        'points'  => [
            'Built core product features for a B2B SaaS platform from 0 to 1,500 customers.',
            'Designed and shipped a real-time collaborative editing feature using WebSockets.',
            'Owned the entire mobile experience (React Native) — 4.7★ App Store rating.',
            'Integrated Stripe billing, handling $400k+ MRR in subscription revenue.',
        ],
    ],
    [
        'role'    => 'Frontend Developer',
        'company' => 'Helix Studio',
        'period'  => '2018 — 2020',
        'type'    => 'Full-time',
        'points'  => [
            'Delivered 20+ client projects ranging from landing pages to full web applications.',
            'Established the studio\'s component library, cutting project setup time by 60%.',
            'Introduced automated accessibility auditing into the CI pipeline.',
        ],
    ],
    [
        'role'    => 'Freelance Developer',
        'company' => 'Self-employed',
        'period'  => '2016 — 2018',
        'type'    => 'Freelance',
        'points'  => [
            'Built e-commerce stores, marketing sites, and custom WordPress themes for 30+ clients.',
            'Developed a custom PHP booking system for a regional hospitality chain.',
        ],
    ],
];

$uses_list = [
    'Hardware' => [
        ['item' => 'MacBook Pro 16" M3 Max', 'note' => 'Primary machine. Ridiculously fast.'],
        ['item' => 'LG UltraFine 27" 4K', 'note' => 'Easy on the eyes for long sessions.'],
        ['item' => 'Keychron Q2 Pro', 'note' => 'Gateron Brown switches. Satisfying without being obnoxious.'],
        ['item' => 'Sony WH-1000XM5', 'note' => 'Deep work demands silence.'],
    ],
    'Development' => [
        ['item' => 'VS Code', 'note' => 'Neovim is cool, productivity is cooler.'],
        ['item' => 'Warp Terminal', 'note' => 'Finally, a terminal that doesn\'t feel like 1995.'],
        ['item' => 'TablePlus', 'note' => 'Best database GUI, no contest.'],
        ['item' => 'Insomnia', 'note' => 'For REST and GraphQL testing.'],
        ['item' => 'Docker Desktop', 'note' => 'Consistent environments, zero excuses.'],
    ],
    'Design' => [
        ['item' => 'Figma', 'note' => 'Where all interfaces begin.'],
        ['item' => 'Pixelmator Pro', 'note' => 'Lighter than Photoshop for quick edits.'],
    ],
    'Productivity' => [
        ['item' => 'Notion', 'note' => 'Project notes, architecture decisions, everything.'],
        ['item' => 'Raycast', 'note' => 'Spotlight replacement that actually works for developers.'],
        ['item' => 'Arc Browser', 'note' => 'Spaces changed how I context-switch.'],
    ],
];