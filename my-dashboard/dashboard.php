<?php
$pageTitle = "Dashboard";
include 'htmlopen.php';
include 'header.php';
?>

    <!-- Dashboard Content -->
    <div class="dashboard-content">
      <div class="dashboard-row">
        <div class="dashboard-card next-game-card">
          <div class="card-header">
            <h3 class="card-title">Next game</h3>
            <a href="#" class="view-link">View calendar</a>
          </div>
          <div class="match-info">
            <div class="detail">
              <div class="league-info">
                <i class="fas fa-caret-up"></i>
                <span>Serie A</span>
              </div>
              <div class="match-time">21:00, 11 November, 2020</div>
            </div>
            <div class="match-teams">
              <div class="team team-left">
                <span class="team-name">Juventus</span>
                <img src="assets/juventus.svg" alt="Juventus" class="team-logo">
              </div>
              <div class="vs-indicator">VS</div>
              <div class="team team-right">
                <img src="assets/Sassuolo.svg" alt="Sassuolo" class="team-logo">
                <span class="team-name">Sassuolo</span>
                
              </div>
            </div>
          </div>
        </div>
        
        <!-- Games Statistic Card -->
        <div class="dashboard-card next-game-card">
          <div class="card-header">
            <h3 class="card-title">Games statistic</h3>
            <a href="#" class="view-link">View all statistic</a>
          </div>
          <div class="games-stats">
            <div class="progress-bar">
              <div class="progress-segment victories" style="width: 75%"></div>
              <div class="progress-segment draws" style="width: 12.5%"></div>
              <div class="progress-segment losses" style="width: 12.5%"></div>
            </div>
            <div class="stats-grid">
              <div class="stat-item pl">
                <div class="stat-label">PL</div>
                <div class="stat-value">8</div>
              </div>
              <div class="stat-item">
                <div class="stat-label">VICTORIES</div>
                <div class="stat-value">6</div>
              </div>
              <div class="stat-item">
                <div class="stat-label">DRAWS</div>
                <div class="stat-value">1</div>
              </div>
              <div class="stat-item">
                <div class="stat-label">LOST</div>
                <div class="stat-value">1</div>
              </div>
            </div>
          </div>
        </div>
      </div>
      
      <div class="below-content">
        <!-- Second Row - Standings -->
        <div class="dashboard-row">
          <div class="dashboard-card standings-card">
            <div class="card-header">
              <h3 class="card-title">Standings</h3>
              <a href="#" class="view-link">View all</a>
            </div>
            <div class="standings-table-container">
              <table class="standings-table">
                <thead>
                  <tr>
                    <th>#</th>
                    <th>TEAM</th>
                    <th>MP</th>
                    <th>W</th>
                    <th>D</th>
                    <th>L</th>
                    <th>G</th>
                    <th>PTS</th>
                  </tr>
                </thead>
                <tbody>
                  <tr class="current-team">
                    <td>1</td>
                    <td class="team-cell">
                      <img src="assets/juventus.svg" alt="Juventus" class="table-team-logo">
                      Juventus
                    </td>
                    <td>8</td>
                    <td>6</td>
                    <td>1</td>
                    <td>1</td>
                    <td>13:5</td>
                    <td><strong>19</strong></td>
                  </tr>
                  <tr>
                    <td>2</td>
                    <td class="team-cell">
                      <img src="assets/atalanta.svg" alt="Atalanta" class="table-team-logo">
                      Atalanta
                    </td>
                    <td>8</td>
                    <td>5</td>
                    <td>1</td>
                    <td>3</td>
                    <td>10:2</td>
                    <td><strong>16</strong></td>
                  </tr>
                  <tr>
                    <td>3</td>
                    <td class="team-cell">
                      <img src="assets/inter-milan-2021.svg" alt="Inter" class="table-team-logo">
                      Inter
                    </td>
                    <td>8</td>
                    <td>5</td>
                    <td>0</td>
                    <td>3</td>
                    <td>10:3</td>
                    <td><strong>15</strong></td>
                  </tr>
                  <tr>
                    <td>4</td>
                    <td class="team-cell">
                      <img src="assets/napoli-1.svg" alt="Napoli" class="table-team-logo">
                      Napoli
                    </td>
                    <td>8</td>
                    <td>4</td>
                    <td>1</td>
                    <td>3</td>
                    <td>14:6</td>
                    <td><strong>13</strong></td>
                  </tr>
                  <tr>
                    <td>5</td>
                    <td class="team-cell">
                      <img src="assets/milan-acm.svg" alt="Milan" class="table-team-logo">
                      Milan
                    </td>
                    <td>8</td>
                    <td>4</td>
                    <td>1</td>
                    <td>3</td>
                    <td>8:4</td>
                    <td><strong>13</strong></td>
                  </tr>
                  <tr>
                    <td>6</td>
                    <td class="team-cell">
                      <img src="assets/roma.svg" alt="Roma" class="table-team-logo">
                      Roma
                    </td>
                    <td>8</td>
                    <td>4</td>
                    <td>0</td>
                    <td>4</td>
                    <td>7:3</td>
                    <td><strong>12</strong></td>
                  </tr>
                </tbody>
              </table>
            </div>
          </div>
        </div>
        
        <div>
          <!-- Third Row - Metrics -->
          <div class="dashboard-row metrics-row">
            <div class="metric-card possession">
              <div class="metric-icon">
                <i class="fas fa-chart-pie"></i>
              </div>
              <div class="metric-info">
                <div class="metric-label">POSSESSION</div>
                <div class="metric-value">65<span class="metric-value-sm">%</span></div>
              </div>
            </div>
            
            <div class="metric-card overall-price">
              <div class="metric-icon">
                <i class="fas fa-dollar-sign"></i>
              </div>
              <div class="metric-info">
                <div class="metric-label">OVERALL PRICE</div>
                <div class="metric-value"><span class="metric-value-sm">$</span>690.2<span class="metric-value-sm">m</span></div>
              </div>
            </div>
            
            <div class="metric-card transfer-budget">
              <div class="metric-icon">
                <i class="fas fa-exchange-alt"></i>
              </div>
              <div class="metric-info">
                <div class="metric-label">TRANSFER BUDGET</div>
                <div class="metric-value"><span class="metric-value-sm">$</span>240.6<span class="metric-value-sm">m</span></div>
              </div>
            </div>
            
            <div class="metric-card average-score">
              <div class="metric-icon">
                <i class="fas fa-star"></i>
              </div>
              <div class="metric-info">
                <div class="metric-label">AVERAGE SCORE</div>
                <div class="metric-value">7.2</div>
              </div>
            </div>
          </div>
          
          <!-- Fourth Row - Action Card -->
          <div class="dashboard-row">
            <div class="action-card-container">
              <div class="action-card">
                <div class="action-content">
                  <div class="action-text">
                    <div class="action-label">DON'T FORGET</div>
                    <div class="action-title">Setup training for next week</div>
                  </div>
                  <button class="action-button">Go to training center</button>
                </div>
                <div class="action-illustration">
                  <div class="illustration-elements">
                    <div class="element ball"></div>
                    <div class="element cone"></div>
                    <div class="element whistle"></div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </main>

<?php include 'htmlclose.php'; ?>