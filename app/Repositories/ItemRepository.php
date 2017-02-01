<?php
namespace App\Repositories;

use App\Models\Item;

class ItemRepository extends Item
{

    /**
     * Get paginated active items
     * @param  integer $perPage
     * @return \Illuminate\Contracts\Pagination\LengthAwarePaginator
     */
    public function getActiveItems($perPage = 9)
    {
        return $this->where('active', 1)
            ->orderBy('created_at', 'desc')
            ->paginate($perPage);
    }

    public function getItem($identifier)
    {
        if (preg_match('/[0-9]+/', $identifier)) {
            $item = $this->where('id', $identifier);
        } else {
            $item = $this->where('slug', $identifier);
        }

        return $item->with('user')
            ->first()
            ->toArray();
    }

    public function getItemWithComments($slug, $isActive = true)
    {
        $item = $this->where('slug', $slug);

        if ($isActive === true) {
            $item->where('active', 1);
        }

        return $item->with('user')
            ->with('comments')
            ->with('comments.user')
            ->first()
            ->toArray();
    }

    public function updateItem($itemId, $data)
    {
        $item = [
            'title' => $data['title'],
            'price' => $data['price'],
            'condition' => $data['condition'],
            'category' => $data['category'],
            'description' => $data['description'],
            'province' => $data['province'],
            'city' => $data['city'],
            'mobile' => $data['mobile'],
            'slug' => $data['slug'],
            'active' => $data['active'],
        ];

        return $this->where('id', $itemId)
            ->update($item);
    }

    public function createItem($userId, array $data)
    {
        /*
          array:10 [▼
            "_token" => "CK1V0jfq36EqNMcPii6rLVeONf5XVyW07KeWZAeP"
            "title" => "Third Ad"
            "price" => "900,000.00"
            "condition" => "2nd Hand(Used)"
            "category" => "Buy and Sell"
            "description" => "Third Advertisement"
            "province" => "Bohol"
            "city" => "Borongan"
            "mobile" => "09494017653"
            "images" => UploadedFile {#30 ▼
              -test: false
              -originalName: "materialdesign_principles_metaphor.png"
              -mimeType: "image/png"
              -size: 9849
              -error: 0
            }
          ]
         */
    }
}
