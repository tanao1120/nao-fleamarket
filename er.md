# ER図

```mermaid
erDiagram
    USERS ||--o{ ITEMS : "出品する"
    USERS ||--o{ LIKES : "いいねする"
    USERS ||--o{ COMMENTS : "コメントする"
    USERS ||--o{ PURCHASES : "購入する"

    ITEMS ||--o{ LIKES : "いいねされる"
    ITEMS ||--o{ COMMENTS : "コメントされる"
    ITEMS ||--o| PURCHASES : "購入される"

    ITEMS ||--o{ CATEGORY_ITEM : "カテゴリ紐付け"
    CATEGORIES ||--o{ CATEGORY_ITEM : "商品紐付け"

    USERS {
        unsigned_bigint id PK
        varchar name
        varchar email UK
        timestamp email_verified_at
        varchar password
        varchar profile_image_path
        varchar postal_code
        varchar address
        varchar building_name
        varchar remember_token
        timestamp created_at
        timestamp updated_at
    }

    ITEMS {
        unsigned_bigint id PK
        unsigned_bigint seller_id FK
        varchar name
        varchar brand
        text description
        unsigned_integer price
        varchar condition
        varchar image_path
        timestamp created_at
        timestamp updated_at
    }

    CATEGORIES {
        unsigned_bigint id PK
        varchar name UK
        timestamp created_at
        timestamp updated_at
    }

    CATEGORY_ITEM {
        unsigned_bigint id PK
        unsigned_bigint item_id FK
        unsigned_bigint category_id FK
        timestamp created_at
        timestamp updated_at
    }

    LIKES {
        unsigned_bigint id PK
        unsigned_bigint user_id FK
        unsigned_bigint item_id FK
        timestamp created_at
        timestamp updated_at
    }

    COMMENTS {
        unsigned_bigint id PK
        unsigned_bigint user_id FK
        unsigned_bigint item_id FK
        varchar body
        timestamp created_at
        timestamp updated_at
    }

    PURCHASES {
        unsigned_bigint id PK
        unsigned_bigint buyer_id FK
        unsigned_bigint item_id FK_UK
        varchar payment_method
        varchar shipping_postal_code
        varchar shipping_address
        varchar shipping_building_name
        timestamp purchased_at
        timestamp created_at
        timestamp updated_at
    }