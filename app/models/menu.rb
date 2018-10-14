class Menu < ApplicationRecord
  belongs_to :account
  has_many :items
  has_many :categories

  validates :account, presence: true

  def load_csv(csv_content)
    items, categories = self.class.parse_csv(csv_content)

    MenuItem.import!(items)
    Category.import!(categories)
  end
end
